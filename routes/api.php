<?php

use App\Http\Controllers\user as ControllersUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






Route::get('users',[ControllersUser::class,'showalluser']);

Route::get('user/{id}',[ControllersUser::class,'showoneuser']);


Route::get('drivers',[ControllersUser::class,'showalldriver']);

Route::get('driver/{id}',[ControllersUser::class,'showonedriver']);



Route::get('markets',[ControllersUser::class,'showallmarket']);

Route::get('market/{id}',[ControllersUser::class,'showonemarket']);
