<?php

# Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

# Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

# Courses

Route::get('/courses', 'CoursesController@index');
Route::get('/courses/create', 'CoursesController@create');
Route::get('/courses/{id}', 'CoursesController@show');
Route::get('/courses/{id}/edit', 'CoursesController@edit');
//TODO post methods for edit and create

# Snippets

Route::get('/snippets', 'SnippetsController@index');

//TODO set redirectPath in AuthController
Route::get('/home', function() {
    return redirect('/courses');
});

Route::get('/', function() {
    return view('pages.index');
});