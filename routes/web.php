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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/timelines', 'TimelineController@index')->name('timelines');
Route::get('/timelines/{timeline}', 'TimelineController@show')->name('timeline.show');

Route::get('/faq', function () {
    return view('home');
});

Route::get('/team', function () {
    return view('home');
});

// TO DO :
// - Site map
// - Legal
// - Cookies / Privacy

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/logs', 'LogController@store');
Route::post('/timelines', 'TimelineController@store');

Auth::routes();
