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

Route::get( '/', ['as' => '/', 'uses' => 'FrontController@index']);
Route::get( '/home', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get( '/blog', ['as' => 'blog', 'uses' => 'FrontController@blog']);
Route::get( '/blog/{blog}', ['as' => 'blog.detail', 'uses' => 'FrontController@blog_detail']);
Route::get( '/organizer', ['as' => 'organizer', 'uses' => 'FrontController@organizer']);
Route::get( '/volunteer', ['as' => 'volunteer', 'uses' => 'FrontController@volunteer']);
Route::get( '/about', ['as' => 'about', 'uses' => 'FrontController@about']);
Route::get( '/program', ['as' => 'program', 'uses' => 'FrontController@program']);
Route::get( '/program/{program}', ['as' => 'program.detail', 'uses' => 'FrontController@program_detail']);
Route::get( '/blank', ['as' => 'blank', 'uses' => 'FrontController@about']);
Route::get( '/contact', ['as' => 'contact', 'uses' => 'FrontController@contact']);
Route::get( '/event', ['as' => 'event', 'uses' => 'FrontController@event']);
Route::get( '/event/{event}', ['as' => 'events.detail', 'uses' => 'FrontController@event_detail']);
Route::get( '/gallery', ['as' => 'gallery', 'uses' => 'FrontController@gallery']);

/* Admin */
Route::resource('galleries','GalleryController');
Route::resource('siswa','SiswaController');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('admin','AdminController@admin');
});


