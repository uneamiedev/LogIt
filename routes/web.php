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
    Route::get('/timelines', 'TimelineController@index')->name('timeline.index');
    Route::post('/timelines', 'TimelineController@store')->name('timeline.store')->middleware('can:create,App\Timeline');
    Route::get('/timelines/{timeline}/edit', 'TimelineController@edit')->name('timeline.edit')->middleware('can:update,timeline');
    Route::put('/timelines/{timeline}', 'TimelineController@update')->name('timeline.update');
    Route::delete('/timelines/{timeline}', 'TimelineController@destroy')->name('timeline.destroy')->middleware('can:delete,timeline');

    // Logs
    Route::post('/logs', 'LogController@store')->middleware('can:create,App\Log');;
    Route::delete('/logs/{log}', 'LogController@destroy')->name('log.destroy')->middleware('can:delete,log');

    // Follow
    Route::post('/user/{user}/follow', 'FollowController@store')->name('follow.store');

    // Profile
    Route::get('/settings/{user}/edit', 'ProfileController@edit')->name('profile.edit')->middleware('can:update,user');
    Route::patch('/@{user:username}', 'ProfileController@update')->name('profile.update')->middleware('can:update,user');

    // Like
    Route::post('/timelines/{timeline}/like', 'LikeController@store')->name('like.store');
});

// Public routes
// ----- Timelines
Route::get('/@{user:username}/timelines', 'TimelineController@publicIndex')->name('timeline.index.public');
Route::get('/@{user:username}/timelines/{timeline}', 'TimelineController@show')->name('timeline.show');

// ----- Profile
Route::get('/@{user:username}', 'ProfileController@show')->name('profile.show');

// ----- General
Route::get('/welcome', function () {
    return view('welcome');
});

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

Auth::routes();
