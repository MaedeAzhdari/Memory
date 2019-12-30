<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/m/create' , 'MemoriesController@create');
Route::get('/m/{memory}' , 'MemoriesController@show');
Route::get('/m/{memory}/edit', 'MemoriesController@edit');
Route::patch('/m/{memory}', 'MemoriesController@update');
Route::post('/m' , 'MemoriesController@store');
Route::get('/m/{memory}/delete', 'MemoriesController@delete');
Route::get('/profile', 'MemoriesController@redirectt');
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
