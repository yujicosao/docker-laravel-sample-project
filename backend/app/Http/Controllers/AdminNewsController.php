<?php

namespace App\Http\Controllers;

use App\News;
use Storage;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->get();
        return view('admin.news-index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'messages' => 'required',
            // 'file_name' => 'required'
        ]);

        //s3アップロード開始
        $image = $request->file('img');
        logger('TEST111');
        $path = Storage::disk('s3')->putFile('images', $image, 'public');

        $notice = new News;

        $notice->title = $request->input('title');
        $notice->messages = $request->input('messages');
        $notice->file_name = Storage::disk('s3')->url($path);
        logger($notice->file_name);
        $notice->save();

        return redirect('admin-news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = News::find($id);
        return view('admin.news-show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = News::find($id);
        return view('admin.news-edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'messages' => 'required',
        ]);

        $notice=News::find($id);

        $notice->title = $request->input('title');
        $notice->messages = $request->input('messages');

        $notice->save();

        return redirect('admin-news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = News::find($id);
        $notice->delete();

        return redirect('admin-news');

    }
}
