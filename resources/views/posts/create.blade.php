@extends('layouts.master')


@section('content')

  <h2>Create a Post</h2>

  <hr />
  
  <form method="post" action="/posts">
    @csrf
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Post title">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea id="body" name="body" class="form-control"></textarea>
    </div>
    <div class="form-group"> 
      <button type="submit" class="btn btn-primary">Publish!</button>
    </div>
  </form>  
  
  @include('layouts.errors')
@endsection