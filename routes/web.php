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
    return view('index');
});

// home controller
Route::get('/home', 'HomeController@index');
// about controller
Route::get('/about', 'AboutController@index');
// contacs controller
Route::get('/contacts', 'ContactController@index');
