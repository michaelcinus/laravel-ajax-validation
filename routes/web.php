<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index') -> name('index');
Route::get('/create', 'PostController@create') -> name('create');
Route::post('/store', 'PostController@store') -> name('store');


Route::get('/api/posts/all', 'PostApiController@stampPost') -> name('stampPost');
Route::get('/api/posts/best', 'PostApiController@stampBest') -> name('stampBest');


