<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\SourcesController as AdminSourcesController;

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



Route::get('/news', [NewsController::class, 'index'])
    ->name('news');
Route::get('news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');
Route::get('/category', [CategoryController::class, 'index'])
    ->name('category');
Route::get('category/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('category.show');

Route::resource('/about', AboutController::class);
Route::resource('/report', ReportController::class);

//Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', AdminIndexController::class)
        ->name('index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('sources', AdminSourcesController::class);
});