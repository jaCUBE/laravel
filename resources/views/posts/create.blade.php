@extends('layouts.master')


@section('content')

  <h2>Create a Post</h2>

  <hr />
  
  <form method="post" action="/posts">
    {{ csrf_field() }}
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Post title">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Publish!</button>
  </form>

@endsection