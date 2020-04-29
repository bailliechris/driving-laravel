<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
//Use SQL commands instead of Eloquent
//use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Pagination
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title'=>'required',
            'body'=>'required'
        ]);

        //Save New data to the Database Table
        
        $post = new Post;
        
        $post->title = request('title');
        $post->body = request('body');

        if(!is_Null(request()->file('image'))) {
            $post->image = request()->file('image')->store('public/images');
        }

        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show a single post
        $post =  Post::find($id);

        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //$id missing from update section
    public function update(Request $request)
    {
        //
        $this->validate($request,
        [
            'id'=>'required',
            'title'=>'required',
            'body'=>'required',
            'image'=>'nullable'
        ]);

        //Save New data to the Database Table
        $post = Post::find(request('id'));
        $post->title = request('title');
        $post->body = request('body');
        
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
    
        if(is_null($post)){
            return redirect('/posts')->with('error', 'Post Not Found');
        } 
        elseif($post->image == 'public/images/placeholder.jpg') {
            $post->delete();
            return redirect('/posts')->with('success', 'Post Deleted');
        }
        else{
            Storage::delete($post->image);
            $post->delete();
            return redirect('/posts')->with('success', 'Post Deleted');
        }
    }
}