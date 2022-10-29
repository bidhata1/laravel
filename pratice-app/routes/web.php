<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Illuminate\Supports\Facades\DB;
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

//Route::get('/{name}', function ($name) {
   // return view('welcome', ['name'=>$name]);
//});
//Route::get('/{name}',function($name){
    //return view('welcome',['name'=>$name]);
//});


Route::get("users", [UserController::class,'index']);

//Route::get("/users", [UserController::class,'show']);
//Route::get("users", 'usercontroller@show');
//Route::get("users", [UserController::class ,'loadview']);


/*Route::get('/{$id}', function($id)
{
    echo $id;
   return loadview('users',['id'=>$id]);
});*/

//Route::get("users/{id}", [UserController::class ,'loadview']);


/*Route::get('/formvalidation', [PostController::class, 'viewform'])->name('viewform');
Route::post('/post', [PostController::class, 'store'])->name('store');

Route::get('/form',function()
{
    return view('form');
});*/
Route::view('/login','login');


/*session
Route::get('/home', function () {
    // Retrieve a piece of data from the session...
    $name = session('user');
    session(['key' => 'user']);
});
*/

Route::get('/home',[LoginController::class,'show']);
//Route::get('/login', [LoginController::class,'showlogin']);

    // route to process the form
//Route::post('/login', [LoginController::class,'doLogin']);
//Route::get('/logout', [LoginController::class,'doLogout']);


Route::get('/logout',function()
{
    if(session()->has('username'))
    {
        session()->forget('username');
        session()->flush();
    }
    return redirect('login');
});
/*
Route::get('/login',function()
{
    if(session()->has('username'))
    {
       return redirect('profile');
    }
    return view('login');
});
*/
Route::view('/profile','profile')->middleware('protectedPage');
Route::post('/post',[LoginController::class,'userLogin'])->name('userLogin');

Route::get('ajax',function() {
    return view('message');
 });
 Route::post('/getmsg',[AjaxController::class]);


 Route::get('/image-upload',[ImageController::class,'uploadImage'])->name('imageupload');
 Route::post('/save-image',[ImageController::class,'storeImage']);