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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('users')->group(function(){

    Route::put('/register',[UserController::class,'register']);
    Route::post('/login',[UserController::class,'login']);
    Route::post('/recoverPass',[UserController::class,'recoverPass']);
    Route::put('/registCards',[UserController::class,'registCards']);
    Route::put('/registCollections',[UserController::class,'registCollections']);
    Route::put('/sellCard',[UserController::class,'sellCard']);

});