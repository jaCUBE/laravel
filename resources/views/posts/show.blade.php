@extends('layouts.master')

@section('content')

  <h2>{{ $post->title }}</h2>

  <div class="text">
    {{ $post->body }}
  </div>
  
  
    <form method="post" action="">
      @csrf
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
@endsection