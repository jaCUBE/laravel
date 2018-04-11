<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
  
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
      
      Post::create (request(['title', 'body']));
      
      return redirect('/');
    }
    
    
    
    
    public function delete($id)
    {
      Post::find($id)->find($id)->delete();
      return redirect('/');
    }
    
    
    
    
}