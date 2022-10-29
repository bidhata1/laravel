<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('companies', CompanyCRUDController::class);