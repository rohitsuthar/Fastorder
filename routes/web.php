<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'site'], function () {
    Route::get('task1', ['as' => 'task1', 'uses' => 'SiteController@Task1']);
    Route::get('task2', ['as' => 'task2', 'uses' => 'SiteController@Task2']);
    Route::get('show/{show_id}', ['as' => 'show', 'uses' => 'SiteController@Program']);
});
