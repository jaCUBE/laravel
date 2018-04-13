@extends('layouts.master')

<?php // dd($errors) ?>

@section('content')
    <h1>Login</h1>

    <form method="post" action="/login">
        @csrf

        <div class="form-group">
            <label for="email">Your e-mail:</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Your password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login!">
        </div>

        @include('layouts.errors')
    </form>
@endsection