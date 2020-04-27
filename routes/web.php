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

Route::get('/about', function () {
    return view('videos');
});

Route::group(['middleware' => ['web']], function() {
    Route::get('storage/pro5images/icon.jpg', function () {
        return Image::make(storage_path() . '/pro5images/' . 'icon.jpg')->response();
    });
});
