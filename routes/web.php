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

Route::get('/', 'HeroController@index')->name('hero.index');

Route::get('/create', 'HeroController@create')->name('hero.create');

Route::post('/store', 'HeroController@store')->name('hero.store');

Route::get('/{id}/edit', 'HeroController@edit')->name('hero.edit');

Route::put('/{id}/update', 'HeroController@update')->name('hero.update');

Route::get('/{id}/show', 'HeroController@show')->name('hero.show');

Route::delete('/{id}/destroy', 'HeroController@destroy')->name('hero.destroy');

Route::post('/image/upload', 'HeroController@upload')->name('hero.upload');



