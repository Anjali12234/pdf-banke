<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;




// Auth
Route::get('login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('emplDetail', 'employeeDetail')->name('emplDetail');
    Route::get('newsList/{newsList:slug}','newsDetail')->name('newsDetail');
    Route::get('newsCategory/{newsCategory:slug}','newsCategory')->name('newsCategory');
    Route::get('downloadCategory/{downloadCategory:slug}','downloadCategory')->name('downloadCategory');
    Route::get('downloadList/{downloadList:slug}','downloadDetail')->name('downloadDetail');
    Route::get('farmerCategory/{farmerCategory:slug}','farmerCategory')->name('farmerCategory');
    Route::get('farmerList/{farmerList:slug}','farmerDetail')->name('farmerDetail');
    Route::get('photoGallery','photoGallery')->name('photoGallery');
    ROute::get('photoList/{photo:slug}','photoList')->name('photoList');
    Route::get('documentCategory/{documentCategory:slug}','documentCategory')->name('documentCategory');
    Route::get('documentList/{documentList:slug}','documentDetail')->name('documentDetail');
    Route::get('contact','contact')->name('contact');
    Route::get('link','link')->name('link');
    Route::get('faq','faq')->name('faq');
    Route::get('office-detail/{officeDetail:type}','officeDetail')->name('officeDetail');


});

