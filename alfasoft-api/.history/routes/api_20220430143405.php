<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/lista',[listController::class,'listagem']);
Route::post('/adicionar','listController@');
Route::get('/editar/{user}',[listController::class,'editar']);
Route::put('/update/{user}',[listController::class,'update']);
Route::delete('/delete/{user}',[listController::class,'delete']);
