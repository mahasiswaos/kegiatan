<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */


//Route::get('/', 'App\\Controllers\\TestController@index');

Route::get('/login', 'App\\Controllers\\LoginController@index');

Route::post('/login/proses', 'App\\Controllers\\LoginController@prosesLogin');

Route::get('/login/logout', 'App\\Controllers\\LoginController@doLogout');

Route::get('/users/delete/{id}', 'App\\Controllers\\UserController@userDelete');

Route::get('/users', 'App\\Controllers\\UserController@index');

Route::get('/users/add', 'App\\Controllers\\UserController@userAdd');

Route::get('/users/edit/{id}', 'App\\Controllers\\UserController@userEdit');

Route::post('/users/update/{id}', 'App\\Controllers\\UserController@prosesUpdate');

Route::get('/users/view', 'App\\Controllers\\UserController@userView');

Route::post('/users/proses_add', 'App\\Controllers\\UserController@prosesAdd');

Route::get('/kegiatan/view', 'App\\Controllers\\KegiatanController@kegiatanView');

Route::get('/kegiatan/add', 'App\\Controllers\\KegiatanController@kegiatanAdd');

Route::post('/kegiatan/proses_add', 'App\\Controllers\\KegiatanController@prosesAdd');

Route::get('/kegiatan/delete/{id}', 'App\\Controllers\\KegiatanController@kegiatanDelete');

Route::get('/kegiatan/edit/{id}', 'App\\Controllers\\KegiatanController@kegiatanEdit');

Route::post('/kegiantan/update/{id}', 'App\\Controllers\\KegiatanController@prosesUpdate');

Route::get('/profile/view', 'App\\Controllers\\ProfileController@profileView');

Route::get('/profile/add', 'App\\Controllers\\ProfileController@prifileAdd');

Route::post('/profile/proses_add', 'App\\Controllers\\ProfileController@prosesAdd');

Route::get('/profile/delete/{id}', 'App\\Controllers\\ProfileController@profileDelete');

Route::get('/profile/edit/{id}', 'App\\Controllers\\ProfileController@profileEdit');

Route::post('/profile/update/{id}', 'App\\Controllers\\ProfileController@prosesUpdate');