<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin',[\App\Http\Controllers\Auth\LoginController::class,'showAdmin'])->name('admin.login-view');
Route::post('/admin',[\App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[\App\Http\Controllers\Auth\RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[\App\Http\Controllers\Auth\RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('back_end.layout.index');
})->middleware('auth:admin');

Route::get('/homeWeb', [\App\Http\Controllers\NotificationSendController::class, 'adminIndex'])->name('homeWeb');

Route::post('/store-token', [\App\Http\Controllers\NotificationSendController::class, 'updateDeviceToken'])->name('store.token');
Route::post('/send-web-notification', [\App\Http\Controllers\NotificationSendController::class, 'sendNotification'])->name('send.web-notification');

Route::get('logout-admin' , [\App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('admin.logout');



