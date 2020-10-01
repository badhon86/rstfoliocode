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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
    'uses' => 'RSTController@index',
    'as'   => '/'
]);

Route::get('/services', [
    'uses' => 'RSTController@services',
    'as'   => '/services'
]);

Route::get('/about', [
    'uses' => 'RSTController@about',
    'as'   => '/about'
]);

Route::get('/gallery', [
    'uses' => 'RSTController@gallery',
    'as'   => '/gallery'
]);

Route::get('/contact', [
    'uses' => 'RSTController@contact',
    'as'   => '/contact'
]);

// Route::post('/contact', 'MessageController@store')->name('contact');


