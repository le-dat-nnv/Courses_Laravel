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
use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\StrengthsController;
use App\Http\Controllers\frontEnd\categoryController as frontendCate;
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
    return view('front_end.layout.home');
});

Route::get('dashboard' , [MenuAdminController::class , 'index'])->middleware('checkAuth');

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
    Route::get('add', [CoursesController::class , 'getAdd'])->name('Courses');
    Route::post('store', [CoursesController::class , 'store'])->name('Courses.store');
    Route::get('edit/{id}', [CoursesController::class , 'edit'])->name('Courses.edit');
    Route::put('update/{id}', [CoursesController::class , 'update'])->name('Courses.update');
    Route::get('pay_list', [CoursesController::class , 'payList'])->name('payList');
});

Route::prefix('categories')->group(function () {
    Route::get('list', [categoriesController::class , 'index'])->name('listCategories');
    Route::get('add', [categoriesController::class , 'getAdd'])->name('Categories');
    Route::post('store', [categoriesController::class , 'store'])->name('Categories.store');
    Route::get('edit/{id}', [categoriesController::class , 'edit'])->name('Categories.edit');
    Route::put('Categories/{id}', [categoriesController::class , 'update'])->name('Categories.update');
});


Route::resource('classCourses', classCoursesController::class);
Route::resource('Lectures', LecturesController::class);
Route::resource('promotion', PromotionsController::class)->except(['show']);
Route::resource('config', configController::class)->except(['show']);
Route::resource('menu', MenusController::class)->except(['show']);
Route::resource('banner', BannerController::class)->except(['show']);
Route::resource('rate', RateController::class)->except(['show']);
Route::resource('bill', BillController::class)->except(['show']);
Route::resource('strengths', StrengthsController::class)->except(['show']);
Route::get('promotion/statistical', [PromotionsController::class, 'statistical'])->name('promotion.statistical');


Route::get('Categories', [frontendCate::class , 'getCategoriesCourse'])->name('CategoryCourses');
Route::get('Categories/{slug}', [frontendCate::class , 'getCategoriesCourseDetail'])->name('CategoryCoursesDetail');
Route::post('add-to-cart', [frontendCate::class , 'addToCart'])->name('addToCart.add-to-cart');

// đăng nhập
Route::get('sign-in' , [AuthController::class , 'sign_in_front_end'])->name('sing_in_front_end');

// đăng ký
Route::get('register' , [AuthController::class , 'register_frontend'])->name('register_frontend');
Route::post('register' , [AuthController::class , 'register_frontend'])->name('register_frontend');

// đng xuất
Route::get('sign-out' , [AuthController::class , 'sign_out_front_end'])->name('log_out_front_end');
Route::post('sign-in' , [AuthController::class , 'sign_in_front_end'])->name('sign_in_front_end');
