<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use Orion\Facades\Orion;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Orion::resource('user', \App\Http\Controllers\Api\UserController::class);
// Orion::resource('post', \App\Http\Controllers\Api\PostController::class);

Route::group(['as' => 'api.'], function () {
    Orion::resource('post', \App\Http\Controllers\Api\PostController::class);
});


Route::get('/test', function () {
    return "Everything working fine ffffffffggggg";
});

Route::get('/data', [DataController::class, 'index']);
Route::get('/data/{id}', [DataController::class, 'show']);
Route::post('/data', [DataController::class, 'store']);
Route::put('/data/{id}', [DataController::class, 'update']);
Route::delete('/data/{id}', [DataController::class, 'destroy']);
