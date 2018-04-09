@extends('layouts.master')

@section('content')
  <h1>Task {{$task->id}}</h1>

  {{$task->body}}
@endsection