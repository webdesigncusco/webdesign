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

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/diseño-de-paginas-web-en-cusco', function () {
    return view('paginas');
});

Route::get('/desarrollo-de-sistemas-web', function () {
    return view('sistemas');
});

Route::get('/portafolio', function () {
    return view('portafolio');
});

Route::get('/contacto', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
