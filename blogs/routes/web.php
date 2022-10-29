<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

    Route::get('/', function () {
    return view('welcome');
    });

    Route::get('/register', [AuthController::class, 'create'])->name('register');
    Route::post('/postregister',[AuthController::class,'storeUser'])->name('storeuser');
    Route::get('/login',[AuthController::class,'loginForm'])->name('login');
    Route::post('/storelogin',[AuthController::class,'storeLogin'])->name('storelogin');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('dashboard');;
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/store',[CrudController::class,'storeData'])->name('storedata');
    Route::get('/view', [CrudController::class,'viewData'])->name('viewdata');
    Route::get('/delete/{id}', [CrudController::class, 'destroy']);
    Route::get('edit/{id}', [CrudController::class, 'edit'])->name('editdata');
    Route::post('update/{id}', [CrudController::class, 'updateData'])->name('updatedata');
