<?php

use App\Http\Controllers\Api\AjaxController;
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

Route::get('/ajax/get/{name?}', [AjaxController::class, 'getRequest']);
Route::get('/ajax/getJSON', [AjaxController::class, 'getJSON']);
Route::get('/ajax/getHeader', [AjaxController::class, 'getHeader']);
Route::get('/ajax/getData/{id}', [AjaxController::class, 'errorCheck']);
Route::post('/ajax/post', [AjaxController::class, 'postRequest']);
Route::put('/ajax/put/{id}',[AjaxController::class,'putRequest']);
Route::patch('/ajax/patch/{id}',[AjaxController::class,'patchRequest']);
Route::delete('/ajax/delete/{id}',[AjaxController::class,'deleteRequest']);