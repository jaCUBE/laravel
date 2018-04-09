@extends('layouts.master')

@section('content')

  <h2>{{ $post->title }}</h2>

  <div class="text">
    {{ $post->body }}
  </div>

@endsection