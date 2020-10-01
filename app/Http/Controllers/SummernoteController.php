<?php

namespace App\Http\Controllers;

use App\Summernote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummernoteController extends Controller
{

    public function index()
    {
        return view('summernote');
    }



    public function store(Request $request)
    {
		$detail=$request->summernoteInput;

		$dom = new \domdocument();
		$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

		$images = $dom->getelementsbytagname('img');

		foreach($images as $k => $img){
			$data = $img->getattribute('src');

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$image_name= time().$k.'.png';
			$path = public_path() .'/images/post'. $image_name;

			file_put_contents($path, $data);

			$img->removeattribute('src');
			$img->setattribute('src', $image_name);
		}

		$detail = $dom->savehtml();
		$summernote = new Summernote;
		$summernote->content = $detail;
		$summernote->save();

		return view('summernote_display')->with('summernote', $summernote);

	}


    public function show()
    {
        //$summernote = Summernote::orderBy('id', 'desc')->get()[0];
        $summernote = Summernote::get()[0];
        return view('summernote_display')->with('summernote', $summernote);
    }



}
