<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($id)
    {
        $this->validate(request(), ['body' => 'required|min:2']);

        Post::find($id)->addComment(request('body'));

        return back();
    }
}
