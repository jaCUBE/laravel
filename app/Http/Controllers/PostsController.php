<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
  
  
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
      // dd(request()->all());
      // dd(request(['title', 'body']));
      
      /*
      $post = new Post;
      $post->title = request('title');
      $post->body = request('body');
      $post->save();
       */
      
      Post::create (request(['title', 'body']));
      
      return redirect('/');
    }
    
    
}