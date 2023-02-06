<?php

use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'product'], function () {
    Route::post('makeId',[ProductController::class,'makeWithId']);
    Route::get('loadMeta',[ProductController::class,'loadMeta']);
    Route::get('deleteMeta',[ProductController::class,'delete']);
    Route::get('updateMeta',[ProductController::class,'update']);
    Route::get('test',[ProductController::class,'test']);
});
