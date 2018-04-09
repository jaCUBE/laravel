<?php

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show')->where('id', '[0-9]+'); // ID as a number
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');