<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::post('/posts/edit','PostsController@update');
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::resource('posts', 'PostsController');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
   Route::get('create','Auth\RegisterController@showRegistrationForm')->name('create');
   Route::post('create','Auth\RegisterController@create');
   Route::post('logout','Auth\LoginController@logout')->name('logout');
});

Route::get('/home', 'HomeController@index')->name('home');
