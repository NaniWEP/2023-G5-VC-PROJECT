<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteWorkshopPostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SchoolManagerController;
use App\Http\Controllers\WorkshopPostController;
use App\Models\WorkshopPost;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityPostController;
use App\Models\FavoriteWorkshopPost;
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

        // get user data route
        Route::get('/getUser', [AuthController::class, 'getUser']);

        // Log out route
        Route::post('/logout', [AuthController::class, 'logout']);

        // university routes
        Route::resource('/university', UniversityController::class);
        Route::get('/myUniversity', [UniversityController::class, 'showMyUniversity']);
        Route::prefix('/workshop')->group(function(){
            Route::get('/selectByUser', [WorkshopPostController::class, 'selctByUserId']);
        });
    });

});

Route::prefix('/university')->group(function () {
    Route::get('/showAllUniversity', [UniversityController::class, 'index']);
    Route::get('/university', [UniversityController::class, 'index']);
    Route::get('/university/{id}', [UniversityController::class, 'show']);
    Route::get('/expirepost', [UniversityPostController::class,'getUnivertiesPostExprired']);
    Route::get('/majorPost', [UniversityPostController::class,'getMajoePost']);
    Route::get('/majorPost/{id}', [UniversityPostController::class,'getMajoePostById']);
    Route::get('/newUpdate', [UniversityPostController::class,'getMajorLastUpdated']);
});
// Expired routes
Route::prefix('/workshop')->group(function(){
    Route::get('/expirepost', [WorkshopPostController::class,'getWorkshopPostExprired']);
    Route::post('/favorites',[FavoriteWorkshopPostController::class,'store']);
});
// Role routes
Route::resource('/role', RoleController::class);

// Login / register routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


// Expired routes
Route::prefix('/workshop')->group(function(){
    Route::get('/workshopDetail/{id}', [WorkshopPostController::class,'show']);
    Route::get('/expirepost', [WorkshopPostController::class,'getWorkshopPostExprired']);
    Route::get('/newUpdate', [WorkshopPostController::class,'getWorkshopLastUpdated']);
    Route::get('/workshopPost', [WorkshopPostController::class, 'workshopPost']);
    Route::get('/', [WorkshopPostController::class, 'index']);
    Route::get('/{id}', [WorkshopPostController::class, 'selctByUserId']);
});


Route::get('/getexpiredworkshop',[WorkshopPostController::class,'getWorkshopExprired']);

Route::get('/majors',[MajorController::class,'index']);


Route::fallback(function () {
    return "Sorry we cannot found!!😥😣";
});
