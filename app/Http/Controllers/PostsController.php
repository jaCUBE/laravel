<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    // @TODO edit this
    public function index()
    {
      $posts = Post::latest()->filter(request(['month', 'year']))->get();

      $archives = Post::selectRaw('YEAR(created_at) AS year, MONTHNAME(created_at) AS month, COUNT(*) AS published')
                    ->groupBy('year', 'month')
                    ->orderByRaw('MIN(created_at) DESC')
                    ->get()
                    ->toArray();
      
      return view('posts.index', compact('posts', 'archives'));
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

      auth()->user()->publish(
          new Post(request(['title', 'body']))
      );
      
      return redirect('/');
    }
    
    
    
    
    public function delete($id)
    {
      Post::find($id)->find($id)->delete();
      return redirect('/');
    }

    
    
    
}