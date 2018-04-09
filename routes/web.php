<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'Clean the house',
        'Learn Laravel',
        'Get a job'
    ];
    
    $name = 'Jakub';
  
    return view('welcome', compact('tasks', 'name'));
});
