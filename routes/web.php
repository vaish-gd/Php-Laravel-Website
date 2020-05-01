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

Route::get('/login', function () {
    return view('login');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/videos', 'videosController@index');

Route::post('regController','regController@index');

//Route::post('/register', 'register-controller@putData')->name('SubmitForm');

//Route::get('/register', 'register-controller@index');
