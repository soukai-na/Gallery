<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UploadImagesController;

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
})->name('index')->middleware('admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');

Route::controller(FileController::class)->group(function(){
    Route::get('uploadFiles', 'index');
    Route::get('displayFiles', 'display')->name('displayFiles');
    Route::post('image-upload', 'store')->name('image.store');
})->middleware('admin');

Route::get('galerie', [UploadImagesController::class, 'gallery'])->name('gallery')->middleware('admin'); 

Route::delete('/images/{image:id}/delete',[UploadImagesController::class,'delete'])->name('images.delete')->middleware('admin');

Route::get('multiple-image-upload', [UploadImagesController::class, 'index'])->name('images.index')->middleware('admin');
 
Route::post('multiple-image-upload', [UploadImagesController::class, 'store'])->name('images.store')->middleware('admin');
