<?php
Route::get('/', 'BaseController@getIndex');
Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('home','HomeController@postIndex');


Route::get('all', 'MaintextController@getAll');
Route::get('/{url}', 'MaintextController@getIndex');


