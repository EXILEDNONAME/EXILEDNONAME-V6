<?php

Route::get('/', 'DefaultController@index')->name('frontend.index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/file-manager', 'DashboardController@file_manager')->name('dashboard.file-manager');
Route::get('/dashboard/logout', 'DashboardController@logout')->name('dashboard.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/template', 'DashboardController@index')->name('dashboard.index');
