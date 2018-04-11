@extends('layouts.master')



@section('content')
  @foreach($posts as $post)
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x60" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">
          <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h2>
        <p class="card-text">{{$post->body}}</p>
        <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More →</a>
        
        <form method="post" action="posts/{{$post->id}}">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </div>
      <div class="card-footer text-muted">
        Posted on
        <span title="{{ $post->created_at }}">
          {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}
        </span>
      </div>
    </div>      
  @endforeach
@endsection