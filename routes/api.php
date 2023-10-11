<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\frontEnd\courseController;
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


Route::get('fetch-provinces' , [PromotionsController::class , 'fetch_provinces'] );
Route::post('fetch-districts' , [PromotionsController::class , 'fetch_districts'] );
Route::post('fetch-wards' , [PromotionsController::class , 'fetch_wards'] );


Route::get('get-ward/{districts}' , [courseController::class , 'getWards'])->name('get-ward');
Route::get('get-districts/{city}' , [courseController::class , 'getDistricts'])->name('get-districts');
Route::get('get-city' , [courseController::class , 'getCity'])->name('get-city');


Route::resource('Lectures' , \App\Http\Controllers\api\LecturesController::class);

Route::post('login-api' , [\App\Http\Controllers\HomeController::class , 'LoginApi']);
