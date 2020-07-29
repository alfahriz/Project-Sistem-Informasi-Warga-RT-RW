<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'rtController@homepage');
Route::get('about', 'rtController@about');
Route::get('keluarga', 'rtController@index');
Route::get('keluarga/create', 'rtController@create');
Route::get('keluarga/{keluarga}', 'rtController@show');
Route::post('keluarga', 'rtController@store');
Route::get('keluarga/edit/{keluarga}', 'rtController@edit');
Route::patch('keluarga/{keluarga}/update', 'rtController@update');
Route::get('keluarga/{keluarga}/delete', 'rtController@delete');

?>