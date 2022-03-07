<?php

Route::get('/', 'DefaultController@index')->name('frontend.index');

Route::group([
  'as' => 'dashboard.',
  'prefix' => 'dashboard',
  'namespace' => 'Backend',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
  Route::get('/file-manager', 'DashboardController@file_manager')->name('file-manager');
  Route::get('/language/{language}', 'DashboardController@language')->name('language');
  Route::get('/logout', 'DashboardController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/template', 'DashboardController@index')->name('dashboard.index');
