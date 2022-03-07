<?php

Route::get('/', function () {
    return 'test';
});

Route::group([
  'as' => 'dashboard.',
  'prefix' => 'dashboard',
  'namespace' => 'Backend',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
  Route::get('/file-manager', 'DashboardController@file_manager')->name('file-manager');
  Route::get('/language/{language}', 'DashboardController@language')->name('language');
  Route::get('/profile', 'DashboardController@profile')->name('profile');
  Route::get('/logout', 'DashboardController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
