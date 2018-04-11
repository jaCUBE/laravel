<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    // @TODO edit this
    public function index()
    {
      $posts = Post::latest()->get();
      
      return view('posts.index', compact('posts'));  
    }
    
    
    
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show', compact('post'));
    }   
    
    
    
    
    public function create()
    {
      return view('posts.create');
    }    
    
    
    
    
    public function store()
    {      
      $this->validate(request(), [
         'title' => 'required',
          'body' => 'required'
      ]);

      Post::create([
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id() // Helper for auth()->user()->id
      ]);
      
      return redirect('/');
    }
    
    
    
    
    public function delete($id)
    {
      Post::find($id)->find($id)->delete();
      return redirect('/');
    }

    
    
    
}