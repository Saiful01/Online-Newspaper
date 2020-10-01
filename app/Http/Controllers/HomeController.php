<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\User;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function login()
    {
       if (Auth::check()) {
            return Redirect::to('/home');
        }

        return view('admin.login.login');
    }

    public function userRegistration()
    {

        return view('common.registration.index');
    }

    public function index()
    {

        $post_count = Post::count();
        $user_count = User::count();
        $category_count = Category::count();
        $comments = Comment::count();

        $unique_visitor = Visitor::count();
        $from = Carbon::now()->subDays(6);
        $to = Carbon::now();
        $weekly_visitors = Visitor::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'ASC')->get();
        $weekly_visitor_count = 0;
        if (!is_null($weekly_visitors)) {

            foreach ($weekly_visitors as $weekly_visitor) {
                $total_count = 0;
                for ($i = 0; $i <= 23; $i++) {
                    if ($i < 9) {
                        $column = "hour_0" . $i;
                    } else {
                        $column = "hour_" . $i;
                    }
                    $total_count = $total_count + $weekly_visitor->$column;
                }
                $weekly_visitor_count = $weekly_visitor_count + $total_count;
            }
        }

        $visitors = Visitor::whereDate('created_at', Carbon::today())
            ->first();
        $today_total_visitor = 0;
        if (!is_null($visitors)) {
            for ($i = 0; $i <= 23; $i++) {
                if ($i < 9) {
                    $column = "hour_0" . $i;
                } else {
                    $column = "hour_" . $i;
                }

                $today_total_visitor = $today_total_visitor + $visitors->$column;
            }
        }


        return view('admin.pages.home.index')
            ->with('post_count', $post_count)
            ->with('user_count', $user_count)
            ->with('comment_count', $comments)
            ->with('unique_visitor', $unique_visitor)
            ->with('weekly_visitor_count', $weekly_visitor_count)
            ->with('today_total_visitor', $today_total_visitor)
            ->with('category_count', $category_count);
    }

    public function doLogin(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $remember = true;

        // attempt to do the login
        try {

            if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

                $request->session()->put('id', 1);
                $user = User::where('email', $email)->first();
                $request->session()->put('user_type', $user->user_type);
                return Redirect::to('/admin-home');
            }

        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());

        }
        //Auth::logout(); // log the user out of our application
    }

    public function userLogin(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $remember = true;

        // attempt to do the login
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

            $request->session()->put('id', 1);
            $user = User::where('email', $email)->first();
            $request->session()->put('user_type', $user->user_type);
            return Redirect::to('/details');
        } else {
            return back()->with('failed', "Email or password does not match");

        }
        //Auth::logout(); // log the user out of our application
    }

    public function userRegistrationStore(Request $request)
    {


        unset($request['_token']);
        $request['user_type'] = 3;
        $request['password'] = Hash::make($request['password']);
        $request['biography'] = "";


        try {
            User::create($request->all());

            $user = User::where('email', $request['email'])->first();
            Auth::login($user);

            return back()->with('success', "Successfully Registered. Please log In Your Account");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back() - with('failed', $exception->getMessage());
        }
    }

    public function commentstore(Request $request)
    {


        unset($request['_token']);
        try {
            User::create($request->all());

            return back()->with('success', "Successfully Save Your Comment");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back() - with('failed', $exception->getMessage());
        }
    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/');
    }

    public function forgetPass(Request $request)
    {
        return view('admin.login.forget_pass');
    }

    public function forgetPassEmailSend(Request $request)
    {
        $email = $request['email'];
        $is_exist = User::where('email', $email)->first();
        if (is_null($is_exist)) {
            return \redirect('/admin/login')->with('failed', 'User not Exist');
        } else {
            return $this->passwordResetEmail($email);
        }
    }

    private function passwordResetEmail($email)
    {

        $random_string = $this->generateRandomString(5);
        $expire_time = "";
        try {
            User::where('email', $email)->update([
                    'temp_code' => $random_string,
                ]
            );

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

        $to = $email;
        $subject = "Password Reset";
        $message = "Here is your temporary code: " . $random_string;

        mail($to, $subject, $message);
        return \redirect('/admin/password/save')->with('success', 'Check Your Email');
    }

    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function passwordSave(Request $request)
    {
        if ($request->isMethod('post')) {
            $email = $request['email'];
            $temp_code = $request['temp_code'];
            $new_pass = $request['new_pass'];
            $is_exist = User::where('email', $email)
                ->where('temp_code', $temp_code)
                ->first();
            if (is_null($is_exist)) {
                return back() > with('failed', 'Temporary code or Email is wrong');
            } else {
                User::where('email', $email)
                    ->update([
                        'password' => Hash::make($new_pass)
                    ]);
                return \redirect('/admin/login')->with('success', 'Password reset Successfully');
            }
        } else {
            return view('admin.login.password_reset');
        }

    }
}
