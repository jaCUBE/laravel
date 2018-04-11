<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show')->where('id', '[0-9]+'); // ID as a number
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::delete('/posts/{id}', 'PostsController@delete')->where('id', '[0-9]+'); // ID as a number

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/posts/{id}/comments', 'CommentsController@store')->where('id', '[0-9]+'); // ID as a number


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');