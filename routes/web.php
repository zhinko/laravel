<?php
Route::get('/', 'BaseController@getIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('all', 'MaintextController@getAll');
Route::get('/{url}', 'MaintextController@getIndex');