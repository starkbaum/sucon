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
Route::get('data/accept/{id}', 'DataController@acceptData');

# Courses
Route::resource('courses', 'CoursesController');
Route::get('courses/like/{id}', 'CoursesController@toggleLike');
Route::get('courses/{param}', 'CoursesController@showParam');

# Comments
Route::resource('comments', 'CommentsController');
Route::get('comments/delete/{id}', 'CommentsController@destroy');

# Customers
Route::resource('customers', 'CustomersController');
Route::get('customers/update/{id}', 'CustomersController@edit');
Route::get('customers/delete/{id}', 'CustomersController@destroy');

# Persons
Route::resource('persons', 'PersonsController');
Route::get('persons/update/{id}', 'PersonsController@edit');
Route::get('persons/destroy/{id}', 'PersonsController@destroy');

# Snippets
Route::resource('snippets', 'SnippetsController');
Route::get('snippets/delete/{id}', 'SnippetsController@destroy');

# Keywords
Route::resource('keywords', 'KeywordsController');

# Search
Route::get('search/show', 'SearchController@search');
Route::get('search/courses', 'SearchController@searchCourses');
Route::get('search/snippets', 'SearchController@searchSnippets');

# Statistics
Route::get('statistics', 'StatisticsController@index');

# Admin
Route::get('admin', 'AdminController@index');
Route::get('admin/users', 'AdminController@userManagement');
Route::get('admin/files', 'AdminController@fileAcceptance');
Route::get('admin/changeUserAdminRole/{id}', 'AdminController@changeUserAdminRole');
Route::get('admin/statistics', 'StatisticsController@index');

# Mail

Route::get('mail/test', 'MailingController@sendTestMail');
Route::get('mail/sendFile/{id}', 'MailingController@sendFile');




Route::get('get-video/{id}', 'DataController@getVideo')->name('getVideo');