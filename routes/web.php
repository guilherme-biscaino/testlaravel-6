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
Route::deçete('/news/{id}', 'NewsController@destroy')->name('news.destroy');

Route::put('/news/{id}', 'NewsController@update')->name('news.update');

Route::get('/news/{id}/edit','NewsController@edit')->name('news.edit');

Route::get('/news/create',"NewsController@create")->name('news.create');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato', function () {
    return view('contat');
});
Route::get('/news/{id}','NewsController@show')->name('news.show');

Route::get('/news','NewsController@index')->name('news.index');

Route::post('/news','NewsController@store')->name('news.store');

Route::get('/login', function () {
    return 'login';
});
