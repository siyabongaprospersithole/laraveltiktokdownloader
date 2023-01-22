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



Route::post('/tik',[\App\Http\Controllers\URLDownloader::class,'handle']);

//download watermarked video
Route::get('/dwn/wm/{link?}',[\App\Http\Controllers\DownloadController::class,'downloadwatermarkedvideo']);
Route::get('/dwn/sd/{link?}',[\App\Http\Controllers\DownloadController::class,'downloadsound']);