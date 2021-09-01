<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->get();
        return view('news',compact('news'));
    }
    public function show($id)
    {
        $notice = News::find($id);
        $latest_news = News::orderBy('created_at','desc')->take(5)->get();

        return view('news-show',compact('notice','latest_news'));
        
    }
}
