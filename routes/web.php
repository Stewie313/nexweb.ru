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

Route::get('/', 'IndexController@show')->name('index');
Auth::routes();

Route::get('/article/{id}', 'ArticleController@showArticle')->name('article');

Route::get('/articles', 'ArticleController@show')->name('articles');

Route::get('/about', 'AboutController@show')->name('about');

Route::get('/home', 'HomeController@index')->name('home');
