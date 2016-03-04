<?php

# Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

# Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

#File Management
Route::post('data/upload', 'DataController@store');
Route::get('download/{id}', 'DataController@download');
Route::get('data/delete/{id}', 'DataController@destroy');
Route::get('data/showPdf/{id}', 'DataController@showPdf');

# Courses
Route::resource('courses', 'CoursesController');
Route::get('courses/{param}', 'CoursesController@showParam');

# Comments
Route::resource('comments', 'CommentsController');
Route::get('comments/delete/{id}', 'CommentsController@destroy');

# Customers
Route::resource('customers', 'CustomersController');

# Snippets
Route::resource('snippets', 'SnippetsController');
Route::get('/snippets/delete/{id}', 'SnippetsController@destroy');

# Keywords
Route::resource('keywords', 'KeywordsController');

# Search
Route::get('search/show', 'SearchController@search');
Route::get('search/courses', 'SearchController@searchCourses');
Route::get('search/snippets', 'SearchController@searchSnippets');

# Statistics
Route::get('statistics', 'StatisticsController@index');

# Admin
Route::get('admin/statistics', 'StatisticsController@index');

# temporary helper routes
//TODO set redirectPath in AuthController
Route::get('/home', function() {
    return redirect('/courses');
});

Route::get('/', function() {
    return view('pages.index');
});