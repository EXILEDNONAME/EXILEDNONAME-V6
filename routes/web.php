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
  Route::get('/messages', 'DashboardController@message')->name('message');
  Route::group([
    'as' => 'profile.',
    'prefix' => 'profile',
  ], function(){
    Route::get('/account-information', 'DashboardController@profile_account_information')->name('account-information');
    Route::get('/change-password', 'DashboardController@profile_change_password')->name('change-password');
    Route::get('/timeline', 'DashboardController@profile_timeline')->name('timeline');
    Route::post('update-password', 'DashboardController@profile_update_password')->name('update-password');
    Route::get('/', function () { return redirect('/dashboard/profile/timeline'); });
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
  'as' => 'dashboard.dummy.',
  'prefix' => 'dashboard/dummy',
  'namespace' => 'Backend',
], function(){
  Route::get('/', 'SystemController@index')->name('index');
  Route::get('/tables', 'SystemController@table')->name('tables');
});

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
