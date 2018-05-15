<?php



Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');


Route::get('/posts/{post}/edit', 'PostsController@edit');



// Route::resource('/posts', 'PostsController');
