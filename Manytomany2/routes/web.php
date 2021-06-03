<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');

Route::get('/car/{index}', 'HomeController@car') -> name('car');

Route::get('/create/car', 'HomeController@create') -> name('create');
Route::post('/store/car', 'HomeController@store') -> name('store');

Route::get('/edit/car/{id}', 'HomeController@edit') -> name('edit');
Route::post('/update/car/{id}', 'HomeController@update') -> name('update');
