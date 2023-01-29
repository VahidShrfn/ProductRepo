<?php

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Product as AppProduct;
use Illuminate\Support\Facades\Route;
use Tests\Feature\ProductTest;

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

Route::get('/makeid', [Controller::class,'makeId']);
Route::get('/loadmeta', [Controller::class,'loadMeta']);
Route::get('/delete', [Controller::class,'delete']);
Route::get('/', function(){
    echo 'hi';
});

Route::get('/test',function(){

    $test = new ProductTest();
    $test=$test()->test_makeId();

});