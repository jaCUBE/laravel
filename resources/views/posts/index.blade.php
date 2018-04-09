@extends('layouts.master')



@section('content')
  @foreach($posts as $post)
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{$post->body}}</p>
        <a href="posts/{{$post->id}}" class="btn btn-primary">Read More →</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>      
  @endforeach
@endsection