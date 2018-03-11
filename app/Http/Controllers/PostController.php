<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts=Post::all();
      return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->hasfile('filename'))
       {
          $file = $request->file('filename');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/', $name);
       }
      $post= new Post();
      $post->title=$request->get('title');
      $post->content=$request->get('content');
      $post->thumbnail=$name;
      $passport->save();

      return redirect('posts')->with('success', 'Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('edit',compact('post','id'));
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
      if($request->hasfile('filename'))
       {
          $file = $request->file('filename');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/', $name);
       }

      $post= Post::find($id);
      $post->title=$request->get('title');
      $post->content=$request->get('content');
      $post->thumbnail=$name;
      $post->save();
      return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = post::find($id);
      $post->delete();
      return redirect('posts')->with('success','Post has been deleted');
    }
}
