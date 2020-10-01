<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {

        $datas = Post::get();
        $array = [];
        $item = [];
        foreach ($datas as $data) {

            $createdAt = Carbon::parse($data->created_at);
            $item['created_at'] = $createdAt->format('d M, Y g:i A');

            $item['post_headline'] = $data->post_headline;
            $item['post_slug'] = $data->post_slug;
            $array[] = $item;
        }


        return $array;

        /* if (is_null($result)) {
             PostView::create(array('post_id' => $id, 'views' => 1));
         } else {
             PostView::where('post_id', $id)->update(array('post_id' => $id, 'views' => $result->views + 1));
         }*/
    }

    public function about()
    {

        return view('common.about.index');
    }

    public function contact()
    {

        return view('common.contact.index');
    }

}
