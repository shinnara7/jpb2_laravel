<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts=Posts::all();
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
        return view('backend.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
         $request->validate([
            "category"=>"required",
            "title" => "required",
            "photo" => "required",            
            "content" => "required"
        ]);
         // if include file, upload
        if($request->file()) {
            $fileName = time().'_'.$request->photo->getClientOriginalName(); // 1970 jan 1
            $filePath = $request->file('photo')->storeAs('post_photo', $fileName, 'public');
            $path = 'storage/'.$filePath;
        }

        // data store
        $posts = new Posts;
        $posts->category_id = $request->category;
        $posts->photo = $path;
        $posts->title = $request->title;
        $posts->content = $request->content;
        
        $posts->save();
         

        // return redirect
        return redirect()->route('posts.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        
          return view('backend.post.detail',compact('posts'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        // dd($posts);
        $posts->delete();
        return redirect()->route('posts.index');
    }
}
