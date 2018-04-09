@extends('layouts.master')

@section('content')

  <h2>{{ $post->title }}</h2>

  <img src="http://placehold.it/750x130" alt="Card image cap">
  
  <div class="text">
    {{ $post->body }}
  </div>
  
  
    <form method="post" action="">
      @csrf
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
@endsection