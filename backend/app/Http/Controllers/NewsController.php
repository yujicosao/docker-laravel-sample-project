<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->paginate(9);
        return view('news',compact('news'));
    }
    public function show($id)
    {
        $notice = $this->getNotice($id);
        $latest_news = News::orderBy('created_at','desc')->take(5)->get();

        return view('news-show',compact('notice','latest_news'));

    }
    private function getNotice($id)
    {
        if( !Redis::get("{$id}-notice")){
            $notice = News::find($id);
            Redis::set("{$id}-notice", $notice);
            Redis::expire("{$id}-notice", 1800);
        }

        return $notice = json_decode(Redis::get("{$id}-notice"), true);
    }
}
