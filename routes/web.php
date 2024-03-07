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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/AboutUs', 'HomeController@about')->name('about');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/serviceDetails', 'HomeController@serviceDetails')->name('serviceDetails');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blogDetails', 'HomeController@blogDetails')->name('blogDetails');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/teamDetails', 'HomeController@teamDetails')->name('teamDetails');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/book', 'HomeController@book')->name('book');
