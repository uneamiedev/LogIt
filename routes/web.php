<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function() {
    // Home
    Route::get('/home', 'LogController@index')->name('home');

    // Timelines (index, create, store, show, edit, update, destroy)
    Route::get('/timelines', 'TimelineController@index')->name('timelines');
    Route::post('/timelines', 'TimelineController@store');
    Route::get('/timelines/{timeline}/edit', 'TimelineController@edit')->name('timeline.edit');
    Route::put('/timelines/{timeline}', 'TimelineController@update')->name('timeline.update');
    Route::delete('/timelines/{timeline}', 'TimelineController@destroy')->name('timeline.destroy');

    // Logs
    Route::post('/logs', 'LogController@store');
    Route::delete('/logs/{log}', 'LogController@destroy')->name('log.destroy');

    // Follow
    Route::post('/user/{user}/follow', 'FollowController@store')->name('follow.store');
});


Route::get('/timelines/{timeline}', 'TimelineController@show')->name('timeline.show');



// Profile
// - TO DO: make profile.show to '/@{username}'
Route::get('/user/{user}', 'ProfileController@show')->name('profile.show');

Route::get('/faq', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('welcome');
});

// TO DO :
// - Site map
// - Legal
// - Cookies / Privacy

Route::get('/welcome', function () {
    return view('welcome');
});




Auth::routes();
