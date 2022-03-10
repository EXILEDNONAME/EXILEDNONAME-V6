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
  Route::get('/documentation', 'DashboardController@documentation')->name('documentation');
  Route::get('/file-manager', 'DashboardController@file_manager')->name('file-manager');
  Route::get('/language/{language}', 'DashboardController@language')->name('language');
  Route::get('/logout', 'DashboardController@logout')->name('logout');
  Route::get('/profile', 'DashboardController@profile')->name('profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// DUMMY - TABLE GENERALS
Route::group([
  'as' => 'system.dummy.table.generals.',
  'prefix' => 'dashboard/dummy/tables/generals',
  'namespace' => 'Backend\System\Dummy\Table',
], function(){
  Route::get('active/{id}', 'GeneralController@active')->name('active');
  Route::get('inactive/{id}', 'GeneralController@inactive')->name('inactive');
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
  Route::get('deleteall', 'GeneralController@deleteall')->name('deleteall');
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});
