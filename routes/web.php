<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/placeholder', [App\Http\Controllers\HomeController::class, 'placeholderNew'])->name('placeholder');

Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', [ImageController::class, 'show']);
    Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');
});