<?php

use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\DocumentCategoryController;
use App\Http\Controllers\Admin\DocumentListController;
use App\Http\Controllers\Admin\DownloadCategoryController;
use App\Http\Controllers\Admin\DownloadListController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FarmerCategoryController;
use App\Http\Controllers\Admin\FarmerListController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsListController;
use App\Http\Controllers\Admin\OfficeDetailController;
use App\Http\Controllers\Admin\OfficeHeaderController;
use App\Http\Controllers\Admin\OfficeSettingController;
use App\Http\Controllers\Admin\PhotoController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::resource('slider', SliderController::class);
Route::resource('faq', FaqController::class);
Route::resource('link', LinkController::class);
Route::resource('contactMessage', ContactMessageController::class);

Route::prefix('employees')->group(function () {
    Route::resource('department', DepartmentController::class);
    Route::resource('designation', DesignationController::class);
    Route::resource('employee', EmployeeController::class);
});
Route::prefix('gallery')->group(function () {
    Route::resource('photo', PhotoController::class);
});

Route::prefix('settings')->group(function () {
    Route::resource('officesetting', OfficeSettingController::class)->only('index', 'store');
    Route::resource('officeDetail', OfficeDetailController::class);
    Route::put('officeDetail/{officeDetail}/updateStatus', [OfficeDetailController::class, 'updateStatus'])->name('officeDetail.updateStatus');
    Route::resource('officeHeader',OfficeHeaderController::class);

});

Route::prefix('documents')->group(function () {
    Route::get('documentCategory/{documentCategory}/updateStatus', [DocumentCategoryController::class, 'updateStatus'])->name('documentCategory.updateStatus');
    Route::resource('documentCategory',DocumentCategoryController::class);
    Route::resource('documentList', DocumentListController::class);
    Route::put('documentList/{documentList}/updateDocumentListStatus', [DocumentListController::class, 'updateDocumentListStatus'])->name('documentList.updateDocumentListStatus');
});

Route::prefix('news')->group(function () {
    Route::put('newsCategory/{newsCategory}/updateStatus', [NewsCategoryController::class, 'updateStatus'])->name('newsCategory.updateStatus');
    Route::resource('newsCategory',NewsCategoryController::class);
    Route::resource('newsList', NewsListController::class);
    Route::put('newsList/{newsList}/updateStatus', [NewsListController::class, 'updateStatus'])->name('newsList.updateStatus');
});

Route::prefix('farmers')->group(function () {
    Route::put('farmerCategory/{farmerCategory}/updateStatus', [FarmerCategoryController::class, 'updateStatus'])->name('farmerCategory.updateStatus');
    Route::resource('farmerCategory',FarmerCategoryController::class);
    Route::resource('farmerList', FarmerListController::class);
    Route::put('farmerList/{farmerList}/updateStatus', [FarmerListController::class, 'updateStatus'])->name('farmerList.updateStatus');
});

Route::prefix('downloads')->group(function () {
    Route::put('downloadCategory/{downloadCategory}/updateStatus', [DownloadCategoryController::class, 'updateStatus'])->name('downloadCategory.updateStatus');
    Route::resource('downloadCategory',DownloadCategoryController::class);
    Route::resource('downloadList', DownloadListController::class);
    Route::put('downloadList/{downloadList}/updateStatus', [DownloadListController::class, 'updateStatus'])->name('downloadList.updateStatus');
});

Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
