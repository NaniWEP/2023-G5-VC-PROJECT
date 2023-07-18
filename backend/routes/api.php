<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolManagerController;
use App\Http\Controllers\WorkshopPostController;
use App\Models\WorkshopPost;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityPostController;
use App\Models\University;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('/auth')->group(function () {
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::resource('/university', UniversityController::class);
        Route::get('/myUniversity', [UniversityController::class, 'showMyUniversity']);
    });
});

Route::prefix('/university')->group(function () {
    Route::get('/showAllUniversity', [UniversityController::class, 'index']);
    Route::get('/expirepost', [UniversityPostController::class,'getUnivertiesPostExprired']);
    Route::get('/majorPost', [UniversityPostController::class,'getMajoePost']);
});
// Role routes
Route::resource('/role', RoleController::class);

// Login / register routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Expired routes
Route::prefix('/workshop')->group(function(){
    Route::get('/expirepost', [WorkshopPostController::class,'getWorkshopPostExprired']);
});


Route::get('/getexpiredworkshop',[WorkshopPostController::class,'getWorkshopExprired']);

Route::fallback(function () {
    return "Sorry we cannot found!!😥😣";
});
Route::get('/university', [UniversityController::class, 'index']);
Route::get('/university/{id}', [UniversityController::class, 'show']);
