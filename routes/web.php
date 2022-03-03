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

use App\Http\Controllers\PrefixController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category') -> group ( function () {
    Route::get('/edu-games',[PrefixController::class, 'edugames']);
    Route::get('/kids-games',[PrefixController::class, 'kidsgames']);
    Route::get('/story-books',[PrefixController::class, 'storybooks']);
    Route::get('/kids-songs',[PrefixController::class,'kidssongs']);
});

Route::prefix('news') -> group (function () {
    Route::get('/berita',[ParamController::class, 'berita']);
    Route::get('/berbagi-dampakC19',[ParamController::class, 'news']);
});

Route::prefix('program') -> group (function () {
    Route::get('/karir',[PrefixController::class,'karir']);
    Route::get('/magang',[PrefixController::class, 'magang']);
    Route::get('/kunjungan-industri',[PrefixController::class, 'industri']);
});

Route::get('/about-us',[HomeController::class, 'about']);

Route::resource('/contact-us',ContactUsController::class);

