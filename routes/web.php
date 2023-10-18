<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user as ControllersUser;


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
    return view('info');
});

Route::get('test',[ControllersUser::class,'test'])->name('test');
Route::get('back',[ControllersUser::class,'back'])->name('back');


Route::post('upload',[ControllersUser::class,'upload_profile_image'])->name('upload');

Route::post('uploadback',[ControllersUser::class,'upload_back_image'])->name('uploadback');




Route::get('users',[ControllersUser::class,'showalluser']);

Route::get('user/{id}',[ControllersUser::class,'showoneuser']);


Route::get('drivers',[ControllersUser::class,'showalldriver']);

Route::get('driver/{id}',[ControllersUser::class,'showonedriver']);



Route::get('markets',[ControllersUser::class,'showallmarket']);

Route::get('market/{id}',[ControllersUser::class,'showonemarket']);
