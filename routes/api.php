<?php

use App\Http\Controllers\Api\DepartmentApiController;
use App\Http\Controllers\Api\DesignationApiController;
use App\Http\Controllers\Api\DocumentCategoryApiController;
use App\Http\Controllers\Api\DocumentListApiController;
use App\Http\Controllers\Api\DownloadCategoryApiController;
use App\Http\Controllers\Api\DownloadListApiController as ApiDownloadListApiController;
use App\Http\Controllers\Api\EmployeeApiController;
use App\Http\Controllers\Api\LinkApiController;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\DownloadListApiController;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

Route::get('/users', function () {
    return  UserResource::collection(User::all());
});
Route::get('/user', function () {
    return new UserCollection(User::all());
});

Route::apiResource('slider', SliderController::class);
Route::apiResource('link', LinkApiController::class);
Route::prefix('employees')
    ->as('employees.')
    ->group(function () {
        Route::apiResource('department', DepartmentApiController::class);
        Route::apiResource('designation', DesignationApiController::class);
        Route::apiResource('employee', EmployeeApiController::class);
    });
Route::prefix('legalDocuments')
    ->as('legalDocuments.')
    ->group(function () {
        Route::apiResource('documentCategory', DocumentCategoryApiController::class);
        Route::apiResource('documentList', DocumentListApiController::class);

    });

    Route::prefix('downloads')
    ->as('downloads.')
    ->group(function () {
        Route::apiResource('downloadCategory', DownloadCategoryApiController::class);
        Route::apiResource('downloadList', ApiDownloadListApiController::class);


    });
