<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\User;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    //

    public function index(){
        $post_count = Post::count();
        $user_count = User::count();
        $category_count = Category::count();
        $comments = Comment::count();

        $unique_visitor = Visitor::count();
        $from = Carbon::now()->subDays(6);
        $to = Carbon::now();
        $weekly_visitors = Visitor::whereBetween('created_at', [$from, $to])->orderBy('created_at','ASC')->get();
        $weekly_visitor_count=0;
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
                $weekly_visitor_count=$weekly_visitor_count+$total_count;
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

    public function show(Request $request)
    {
        return view('admin.pages.statistics.index');
    }

    public function todayStatistics(Request $request)
    {
        $visitor = Visitor::whereDate('created_at', Carbon::today())->first();

        return view('admin.pages.statistics.today_stat')->with('visitor', $visitor);
    }

    public function weeklyStatistics(Request $request)
    {
        $end_day = Carbon::now()->format('l');
        $start_day = Carbon::now()->subDays(6)->format('l');
        Carbon::setWeekStartsAt($start_day);
        Carbon::setWeekEndsAt($end_day);
        $from = Carbon::now()->subDays(6);
        $to = Carbon::now();
        $weekly_visitors = Visitor::whereBetween('created_at', [$from, $to])->orderBy('created_at', 'ASC')->get();

        $weekly_array = array();

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
                $weekly_visitor->count = $total_count;
                $weekly_visitor->date = $weekly_visitor->created_at->format('d');
                array_push($weekly_array, $weekly_visitor);
            }
        }

//return $weekly_array;

        return view('admin.pages.statistics.weekly_stat')
            ->with('weekly_array', $weekly_array);
    }

    public function monthlyStatistics(Request $request)
    {
        $end_day = Carbon::now()->format('l');
        $start_day = Carbon::now()->subDays(6)->format('l');
        Carbon::setWeekStartsAt($start_day);
        Carbon::setWeekEndsAt($end_day);
        $year = date('Y');
        $month = date('m');
        $yearly_visitiors = Visitor::
        whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->get();

        $monthly_array = array();

        if (!is_null($yearly_visitiors)) {

            foreach ($yearly_visitiors as $monthly_visitor) {
                $total_count = 0;
                for ($i = 0; $i <= 23; $i++) {
                    if ($i < 9) {
                        $column = "hour_0" . $i;
                    } else {
                        $column = "hour_" . $i;
                    }
                    $total_count = $total_count + $monthly_visitor->$column;
                }
                $monthly_visitor->count = $total_count;
                $monthly_visitor->date = $monthly_visitor->created_at->format('d');
                array_push($monthly_array, $monthly_visitor);
            }
        }

        //return $monthly_array;

        return view('admin.pages.statistics.weekly_stat')
            ->with('weekly_array', $monthly_array);
    }
}
