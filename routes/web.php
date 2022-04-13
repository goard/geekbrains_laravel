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

Route::get('/hello/{name}', function (string $name) {
    return "Welcome to my app {$name}";
});

Route::get('/about', function (string $name) {
    return "My first app create framework Laravel use sail docker";
});

Route::get('/news', function (string $name) {
    return "News create app use sail my first app";
});