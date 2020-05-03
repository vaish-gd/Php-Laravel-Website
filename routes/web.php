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
    return view('inicio');
});

Route::get('/semblanza', function () {
    return view('semblanza');
});

Route::get('/centro', function () {
    return view('centro');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/eventos', function () {
    return view('eventos');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/equipo', function () {
    return view('equipo');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/videos', 'videosController@index');

Route::get('/equipo', 'equipoController@index');

Route::post('regController','regController@index');

Route::post('loginController','loginController@index');

//Route::post('/register', 'register-controller@putData')->name('SubmitForm');

//Route::get('/register', 'register-controller@index');
