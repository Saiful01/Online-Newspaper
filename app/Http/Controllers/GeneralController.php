<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Category;
use App\Comment;
use App\ExhibitionPost;
use App\Menu;
use App\Post;
use App\PostView;
use App\User;
use App\Video;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    //End Homepage Poplating Area
    public function index(Request $request)
    {

        //        ->whereRaw('json_contains(blogs.category_id, \'["' . $id . '"]\')')

        $sliders = Post::where('posts.pin_post', true)
            ->where('posts.publish_status', true)
            ->orderBy('posts.created_at', 'DESC')
            ->limit(7)
            ->get();

        $posts1 = Post::where('posts.publish_status', true)
            ->orderBy('posts.created_at', 'DESC')
            ->where('posts.pin_post', false)
            ->limit(4)
            ->get();

        $posts = Post::where('posts.publish_status', true)
            ->orderBy('posts.created_at', 'DESC')
            ->where('posts.pin_post', false)
            ->limit(10)
            ->get();
        $this->saveVisitorCount($this->get_client_ip());
        return view('common.home.index')
            ->with('sliders', $sliders)
            ->with('posts', $posts)
            ->with('posts1', $posts1);

    }


    public function postDetails($id, $headline)
    {

        $post = Post::where('post_id', $id)
            ->join('users', 'users.id', '=', 'posts.author_id')
            ->first();
        if (is_null($post)) {
            return "Null";
        }

        $cats = json_decode($post->category_id);

        if (count($cats) > 0) {
            $related_posts = Post::
            /* whereRaw('json_contains(category_id, \'["' . $cats[0] . '"]\')')*/
            where('category_id', 'LIKE', '%' . $cats[0] . '%')
                ->limit(3)->orderBy('created_at', 'DESC')->get();
        } else {
            $related_posts = Post::limit(3)->orderBy('created_at', 'DESC')->get();
        }

        $comments = Comment::where('post_id', $id)
            ->join('users', 'users.id', 'comments.user_id')
            ->where('comments.approve_status', true)
            ->select('comments.comment',
                'users.biography',
                'users.id',
                'users.name',
                'comments.created_at'
            )
            ->get();

        //PostViewCounter
        $this->postViewCounter($id);

        return view('common.details.index')
            ->with('post', $post)
            ->with('related_posts', $related_posts)
            ->with('comments', $comments);
    }


    //Start Homepage Populating Area
    public function homeSliderArea()
    {
        $sliders = Post::join('users', 'users.id', '=', 'posts.author_id')
            ->where('posts.publish_status', 1)
            ->limit(3)
            ->orderBy('post_id', 'DESC')
            ->get();

        return response()->json([
            'sliders' => $sliders,
            'message' => 'Success'
        ], 200);

    }

    public function firstRowArea()
    {
        $interviews = Post::join('users', 'users.id', '=', 'posts.author_id')
            ->where('posts.publish_status', 1)
            ->where('categories.category_name', "সাক্ষাৎকার")
            ->limit(1)
            ->orderBy('post_id', 'DESC')
            ->first();
        $articles = Post::join('users', 'users.id', '=', 'posts.author_id')
            ->where('posts.publish_status', 1)
            ->where('categories.category_name', "প্রবন্ধ")
            ->limit(2)
            ->orderBy('post_id', 'DESC')
            ->get();
        $politics = Post::join('users', 'users.id', '=', 'posts.author_id')
            ->where('posts.publish_status', 1)
            ->where('categories.category_name', "রাজনীতি")
            ->limit(2)
            ->orderBy('post_id', 'DESC')
            ->get();

        return response()->json([
            'interviews' => $interviews,
            'articles' => $articles,
            'politics' => $politics,
            'message' => 'Success'
        ], 200);

    }


    public function videoDetails($id, $headline)
    {

        //return $headline;
        $visitor_ip = "192.2566.5";
        $this->saveVisitorCount($visitor_ip);
        $navbar = Category::limit(14)->get();
        $post = Video::where('video_id', $id)
            ->join('users', 'users.id', '=', 'videos.author_id')
            ->first();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();
        $related_post = Post::where('category_id', $post->category_id)->limit(7)->orderBy('post_id', 'DESC')->get();
        $recent_posts = Post::limit(5)->orderBy('post_id', 'DESC')->get();
        $advertisement = Advertisement::get();
        $comments = Comment::where('post_id', $id)->join('users', 'users.id', '=', 'comments.user_id')->get();
        $this->postViewCounter($id);
        return view('general.video.details')
            ->with('all', $navbar)
            ->with('post', $post)
            ->with('related_posts', $related_post)
            ->with('recent_posts', $recent_posts)
            ->with('advertisement', $advertisement)
            ->with('comments', $comments)
            ->with('navbars', $selected_navbar);

    }

    public function exhibitionDetails($id)
    {
        $visitor_ip = "192.2566.5";
        $this->saveVisitorCount($visitor_ip);
        $navbar = Category::limit(14)->get();
        $post = ExhibitionPost::join('users', 'users.id', '=', 'exhibition_posts.author_id')
            ->get();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();
        $related_post = Post::limit(7)->orderBy('post_id', 'DESC')->get();
        $recent_posts = Post::limit(5)->orderBy('post_id', 'DESC')->get();
        $advertisement = Advertisement::get();


        $this->postViewCounter($id);
        return view('general.details.exhibition')
            ->with('all', $navbar)
            ->with('post', $post)
            ->with('related_posts', $related_post)
            ->with('recent_posts', $recent_posts)
            ->with('advertisement', $advertisement)
            ->with('navbars', $selected_navbar);
    }

    public function selectedCategoryPost($category_name)
    {

        $category = Category::where('category_en', $category_name)->first();

        /*    $visitor_ip = "192.2566.5";
            $this->saveVisitorCount($visitor_ip);*/

        if (!is_null($category)) {
            $posts = Post::where('posts.publish_status', 1)
                // ->whereRaw('json_contains(category_id, \'["' . $category->category_id . '"]\')')//TODO:: server change
                ->where('category_id', 'LIKE', '%' . $category->category_id . '%')
                ->paginate(10);
        } else {

            $posts = Post::where('posts.publish_status', 1)->paginate(5);
        }

        return view('common.category.index')
            ->with('posts', $posts)
            ->with('category_name', $category_name);

    }

    public function search(Request $request)
    {
        $visitor_ip = "192.2566.5";
        $this->saveVisitorCount($visitor_ip);

        $searchTerm = $request['query'];
        $searchTerm = $request->input('query');
        $posts = Post::where('post_headline', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('post_details', 'LIKE', '%' . $searchTerm . '%')
            ->where('publish_status', 1)
            ->paginate(5);


        return view('common.category.index')
            ->with('posts', $posts)
            ->with('query', $searchTerm);
        /*     ->with('advertisement', $advertisement);*/

    }

    public function monthSearch($searchTerm)
    {
        $visitor_ip = "192.2566.5";
        $visitor_ip = "192.2566.5";
        //$searchTerm="01";
        $this->saveVisitorCount($visitor_ip);
        $posts = Post::limit(100)->get();
        /*return $posts = Post::where('updated_at', 'LIKE', '%' . $searchTerm . '%')
            ->where('publish_status', 1)
            ->get();*/
        $advertisement = Advertisement::get();
        $navbar = Category::limit(14)->get();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();


        return view('general.categorise_post')
            ->with('all', $navbar)
            ->with('posts', $posts)
            ->with('advertisement', $advertisement)
            ->with('navbars', $selected_navbar);

    }

    public function monthWiseSearch(Request $request)
    {
        $month = $request['month'];
        $year = $request['year'];
        $visitor_ip = "192.2566.5";
        $visitor_ip = "192.2566.5";
        //$searchTerm="01";
        $this->saveVisitorCount($visitor_ip);

        $year = $request['year'];
        $month = $request['month'];
        $posts = Post::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->where('publish_status', 1)
            ->limit(15)
            ->get();
        /*return $posts = Post::where('updated_at', 'LIKE', '%' . $searchTerm . '%')
            ->where('publish_status', 1)
            ->get();*/
        $advertisement = Advertisement::get();
        $navbar = Category::limit(14)->get();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();


        return view('general.categorize_post.index')
            ->with('all', $navbar)
            ->with('posts', $posts)
            ->with('advertisement', $advertisement)
            ->with('navbars', $selected_navbar);

    }

    public function contact()
    {
        $navbar = Category::limit(14)->get();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();

        return view('general.contact.index')
            ->with('navbars', $selected_navbar)
            ->with('all', $navbar);
    }

    public function authorPost($author_id)
    {
        $visitor_ip = "192.2566.5";
        $this->saveVisitorCount($visitor_ip);

        $posts = Post::where('posts.author_id', $author_id)
            ->where('posts.publish_status', 1)
            ->limit(50)
            ->get();
        $navbar = Category::limit(14)->get();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();
        $recent_posts = Post::limit(5)->orderBy('post_id', 'DESC')->where('publish_status', 1)->get();
        $advertisement = Advertisement::get();
        $author = User::where('id', $author_id)->first();
        return view('general.author.author_post')
            ->with('all', $navbar)
            ->with('posts', $posts)
            ->with('recent_posts', $recent_posts)
            ->with('advertisement', $advertisement)
            ->with('author', $author)
            ->with('navbars', $selected_navbar);

    }

    private function postViewCounter($id)
    {

        $result = PostView::where('post_id', $id)->first();
        if (is_null($result)) {
            PostView::create(array('post_id' => $id, 'views' => 1));
        } else {
            PostView::where('post_id', $id)->update(array('post_id' => $id, 'views' => $result->views + 1));
        }
    }

    private function saveVisitorCount($visitor_ip)
    {
        $now_hour = date('H');
        $column = "hour_" . $now_hour;
        $is_exist = Visitor::whereDate('created_at', Carbon::today())->first();

        if (is_null($is_exist)) {

            try {

                Visitor::create(array($column => 1));

            } catch (\Exception $exception) {
                echo $exception->getMessage();
            }
        } else {
            try {
                $counter = $is_exist->$column + 1;
                Visitor::whereDate('created_at', Carbon::today())
                    ->update(array($column => $counter));
            } catch (\Exception $exception) {
                return $exception->getMessage();
            }
        }

    }

    function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';


        return $ipaddress;
    }

    public function CategoryPost($id)
    {

    }
}
