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
Route::group(['prefix' => Setting::get('language')], function () {
    // Route::get( '/', ['as' => '/', 'uses' => 'FrontController@index']);
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
});

/* Route Without Prefix Language */
Route::get( '/', ['as' => '/', 'uses' => 'FrontController@index']);
Route::get( '/id', ['as' => '/', 'uses' => 'FrontController@index']);
Route::get( '/en', ['as' => '/', 'uses' => 'FrontController@index']);
Route::get( '/blog/{blog}', ['as' => 'blog.detail', 'uses' => 'FrontController@blog_detail']);
Route::get( '/event/{event}', ['as' => 'events.detail', 'uses' => 'FrontController@event_detail']);
Route::get( '/program/{program}', ['as' => 'program.detail', 'uses' => 'FrontController@program_detail']);




/* Admin */
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    // Route::get('admin','Admin\AdminController@admin')->middleware('auth');
    Route::get('/','Admin\SlideController@index')->middleware('auth');
    Route::resource('default','Admin\DefaultController')->only(['index','create'])->middleware('auth');
    Route::resource('user','Admin\UserController')->middleware('auth');
    Route::resource('slide','Admin\SlideController')->middleware('auth');
    Route::resource('event','Admin\EventController')->middleware('auth');
    Route::resource('program','Admin\ProgramController')->middleware('auth');
    Route::resource('blog','Admin\BlogController')->middleware('auth');
    Route::resource('volunteer','Admin\VolunteerController')->middleware('auth');
    Route::resource('album','Admin\AlbumController')->middleware('auth');
    Route::resource('gallery','Admin\GalleryController')->middleware('auth');
    Route::resource('media','Admin\MediaController')->middleware('auth');
    Route::resource('setting','Admin\SettingController')->only(['index','store'])->middleware('auth');
});


