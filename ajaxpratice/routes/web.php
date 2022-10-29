<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [PostController::class,'viewForm']);
Route::post('/formsubmit',[PostController::class,'storeData'])->name('formsubmit');
Route::get('/delete/{id}', [PostController::class, 'destroy']);