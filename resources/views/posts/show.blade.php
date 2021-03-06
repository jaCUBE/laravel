@extends('layouts.master')

@section('content')

  <h2 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">{{ $post->title }}</h2>

  <img src="http://placehold.it/750x130" alt="Card image cap">
  
  <div class="text">
    {{ $post->body }}
  </div>

  <hr />

  <div class="comments">
    <ul class="list-group">
      @foreach($post->comments as $comment)
      <li class="list-group-item">
        <strong>{{ $comment->created_at->diffForHumans() }}:</strong>
        {{ $comment->body }}
      </li>
      @endforeach
    </ul>
  </div>

  <hr />

  @include('comments.form')

  <hr />
  
  <form method="post" action="">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-sm btn-danger">Delete post</button>
  </form>
@endsection