<?php

Route::resource('movies', 'MoviesController');
Route::resource('movies.reviews', 'ReviewsController');


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    //
});
