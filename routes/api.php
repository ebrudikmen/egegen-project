<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//News routes...
Route::group(['prefix' => 'newses'], function () {
    Route::post('create', 'NewsController@store')->name('news.store');
    Route::get('{news}', 'NewsController@show')->name('news.show');
    Route::put('{news}', 'NewsController@update')->name('news.update');
    Route::delete('{news}', 'NewsController@delete')->name('news.delete');
});

//Content routes...
Route::group(['prefix' => 'contents'], function () {
    Route::post('create', 'ContentController@store')->name('content.store');
    Route::get('{content}', 'ContentController@show')->name('content.show');
    Route::put('{content}', 'ContentController@update')->name('content.update');
    Route::delete('{content}', 'ContentController@delete')->name('content.delete');
});

//Media routes...
Route::group(['prefix' => 'medias'], function () {
    Route::post('create', 'MediaController@store')->name('media.store');
    Route::get('{media}', 'MediaController@show')->name('media.show');
    Route::put('{media}', 'MediaController@update')->name('media.update');
    Route::delete('{media}', 'MediaController@delete')->name('media.delete');
});
