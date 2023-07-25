<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteUniversityPostController;
use App\Http\Controllers\FavoriteWorkshopPostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\WorshopRegistrationController;
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

// 
// PRIVATE ROUTES
// 
Route::middleware(['auth:sanctum'])->group(function () {

    Route::prefix('/auth')->group(function () {
        // get user data route
        Route::get('/getUser', [AuthController::class, 'olo']);

        // Log out route
        Route::post('/logout', [AuthController::class, 'logout']);

        // update user route
        Route::put('/update/{id}', [AuthController::class, 'updateUser']);

        // university routes
        Route::prefix('/university')->group(function(){
            // crud university
            Route::resource('/university', UniversityController::class);
            // add favorite university post
            Route::post('/favoriteUniversityPost', [FavoriteUniversityPostController::class, 'store']);
            // delete favaite university post
            Route::delete('/favoriteUniversityPost/{university_post_id}', [FavoriteUniversityPostController::class, 'destroy']);
            // get list of favrites
            Route::get('/getListOfFavrite',[FavoriteUniversityPostController::class, 'getListOfFavorite'] );
            // show university
            Route::get('/myUniversity', [UniversityController::class, 'showMyUniversity']);
        });
          // workshop routes
        Route::prefix('/workshop')->group(function(){
            // add favorite workshop
            Route::post('/favorite',[FavoriteWorkshopPostController::class,'store']);
            // get list of favorite workshop
            Route::get('/favoriteList',[FavoriteWorkshopPostController::class,'getFavorite']);
            // get user id
            Route::get('/selectByUser', [WorkshopPostController::class, 'selctByUserId']);
        });
    });

});

// 
// PUBLIC ROUTES
// 

// University routes
Route::prefix('/university')->group(function () {
    Route::get('/showAllUniversity', [UniversityController::class, 'index']);
    Route::get('/university', [UniversityController::class, 'index']);
    Route::get('/university/{id}', [UniversityController::class, 'show']);
    Route::get('/expirepost', [UniversityPostController::class,'getUnivertiesPostExprired']);
    Route::get('/majorPost', [UniversityPostController::class,'getMajoePost']);
    Route::get('/majorPostDetail/{id}', [UniversityPostController::class,'getMajorPostById']);
    Route::get('/newUpdate', [UniversityPostController::class,'getMajorLastUpdated']);
});

// Expired routes
Route::prefix('/workshop')->group(function(){
    Route::post('/favorites',[FavoriteWorkshopPostController::class,'store']);
    Route::get('/workshopDetail/{id}', [WorkshopPostController::class,'show']);
    Route::get('/expirepost', [WorkshopPostController::class,'getWorkshopPostExprired']);
    Route::get('/newUpdate', [WorkshopPostController::class,'getWorkshopLastUpdated']);
    Route::get('/workshopPost', [WorkshopPostController::class, 'workshopPost']);
    Route::get('/', [WorkshopPostController::class, 'index']);
    Route::get('/{id}', [WorkshopPostController::class, 'selctByUserId']);
});

// Role routes
Route::resource('/role', RoleController::class);

// Login / register routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/majors',[MajorController::class,'index']);






Route::fallback(function () {
    return "Sorry we cannot found!!😥😣";
});