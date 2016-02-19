<?php

Route::resource('movies', 'MoviesController');

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {
    //
});
