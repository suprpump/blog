<?php

// URI and Controller Method
Route::get('/', 'PostsController@index');

// Post routes
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::POST('/posts/{post}/comments', 'CommentsController@store');

// Login Route
Route::get('/login', 'SessionsController@create');

// Registration Route
Route::get('/register', 'RegistrationController@create');