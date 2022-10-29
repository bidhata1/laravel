<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/addimage',[ImageController::class,'uploadImage'])->name('uploadImage');
Route::post('/storeimage',[ImageController::class,'saveImage'])->name('saveImage');
Route::get('/viewimage',[ImageController::class,'showImage'])->name('viewImage');
Route::get('/delete/{id}', [ImageController::class, 'destroy']);
Route::get('editimage/{id}', [ImageController::class, 'edit'])->name('editimage');
Route::post('update-image/{id}', [ImageController::class, 'update'])->name('updateImage');