<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\classCoursesController;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\configController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\BillController;
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

Route::get('/', function () {
    return view('front_end.layout.index');
});


Route::get('dashboard', function () {
    return view('back_end.layout.index');
})->middleware('checkAuth');

Route::get('login', function () {
    return view('front_end.home');
})->name('login');

Route::get('register', function () {
    return view('front_end.register');
})->name('register');

Route::post('register_post', [AuthController::class , 'create']);

Route::post('check_login' , [AuthController::class , 'checkUser'])->name('checklogin');


Route::prefix('courses')->group(function () {
    Route::get('list', [CoursesController::class , 'index'])->name('listProduct');
    Route::get('add', [CoursesController::class , 'getAdd'])->name('addProduct');
    Route::get('pay_list', [CoursesController::class , 'payList'])->name('payList');
});

Route::prefix('categories')->group(function () {
    Route::get('list', [categoriesController::class , 'index'])->name('listCategories');
    Route::get('add', [categoriesController::class , 'getAdd'])->name('addCategories');
});


Route::resource('classCourses', classCoursesController::class);
Route::resource('Lectures', LecturesController::class);
Route::resource('promotion', PromotionsController::class)->except(['show']);
Route::resource('config', configController::class)->except(['show']);
Route::resource('menu', MenusController::class)->except(['show']);
Route::resource('banner', BannerController::class)->except(['show']);
Route::resource('rate', RateController::class)->except(['show']);
Route::resource('bill', BillController::class)->except(['show']);
Route::get('promotion/statistical', [PromotionsController::class, 'statistical'])->name('promotion.statistical');
