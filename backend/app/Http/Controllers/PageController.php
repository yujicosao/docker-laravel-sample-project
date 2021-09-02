<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug){
        $page = Page::where('slug',$slug)->first();
        logger($page->title);
        return view('page',compact('page'));
    }
}
