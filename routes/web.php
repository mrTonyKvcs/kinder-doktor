<?php

/*Route::group(*/
//[
    //'prefix' => LaravelLocalization::setLocale(),
    //'middleware' => [ 'localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//], function()
/*{*/

Route::get('sitemap.xml', ['uses' => 'SitemapsController@index']);

//Pages
Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
Route::get('homeopatia', ['as' => 'pages.homeopathy', 'uses' => 'PagesController@homeopathy']);
Route::get('schussler-so', ['as' => 'pages.schussler', 'uses' => 'PagesController@schussler']);
Route::get('szolgaltatasok', ['as' => 'pages.services', 'uses' => 'PagesController@services']);
Route::get('kapcsolat', ['as' => 'pages.contact', 'uses' => 'PagesController@contact']);

//News
Route::get('hirek-olvasmanyok', ['as' => 'blogs.index', 'uses' => 'PostController@index']);
Route::get('hirek-olvasmanyok/{slug}', ['as' => 'blogs.show', 'uses' => 'PostController@show']);
//});

//COVID-19
Route::get('covid-19', [ 'as' => 'covid.index', 'uses' => 'CovidController@index']);
Route::get('covid-19/online-bejelentkezes', [ 'as' => 'appointments.index', 'uses' => 'AppointmentsController@index']);
Route::post('covid-19/online-bejelentkezes', [ 'as' => 'appointments.store', 'uses' => 'AppointmentsController@store']);
Route::get('covid-19/online-bejelentkezes/sikeres-jelentekez', [ 'as' => 'appointments.greeting', 'uses' => 'AppointmentsController@greeting']);

Route::get('admin/hirek', [ 'as' => 'admin.blogs', 'uses' => 'Admin\PostController@index']);
Route::post('admin/hirek', [ 'as' => 'admin.blogs.store', 'uses' => 'Admin\PostController@store']);
Route::get('admin/hirek/{slug}', [ 'as' => 'admin.blogs.edit', 'uses' => 'Admin\PostController@edit']);
Route::post('admin/hirek/{id}', [ 'as' => 'admin.blogs.update', 'uses' => 'Admin\PostController@update']);
Route::delete('admin/hirek/{id}', [ 'as' => 'admin.blogs.destroy', 'uses' => 'Admin\PostController@destroy']);

//Auth::routes();
//Authentication
Route::get('bejelentkezes', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('bejelentkezes', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
