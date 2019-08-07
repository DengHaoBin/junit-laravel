<?php
Route::get('/','JunitController@index');
Route::post('/add','JunitController@store')->name('junit.store');
Route::any('test','TestController@index');