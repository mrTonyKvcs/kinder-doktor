<?php

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
//Pages
Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
Route::get('szolgaltatasok', ['as' => 'pages.services', 'uses' => 'PagesController@services']);
Route::get('kapcsolat', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);

//News
Route::get('hirek-olvasmanyok', ['as' => 'blogs.index', 'uses' => 'BlogsController@index']);
Route::get('hirek-olvasmanyok/{slug}', ['as' => 'blogs.show', 'uses' => 'BlogsController@show']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
