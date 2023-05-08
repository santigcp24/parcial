<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;



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



Route::controller(SalesController::class)->group(function(){
    Route::get('/sales','index');
    Route::post('/sale','store');
    Route::get('/sale/{id}','show');
    Route::put('/sale/{id}','update');
    Route::delete('/sale/{id}','destroy');
});
