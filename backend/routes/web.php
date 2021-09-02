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

Route::get('/', 'IndexController@index')->name('top');

Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@show')->name('news_detail');

Route::get('page/{slug}', 'PageController@show')->name('page');

// admin news
Route::resource('admin-news', 'AdminNewsController')->middleware('auth');

// admin pages
Route::resource('admin-page', 'AdminPageController')->middleware('auth');

// admin contact
Route::get('admin-contact', 'AdminContactController@index')->middleware('auth')->name('admin-contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// contact form
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');