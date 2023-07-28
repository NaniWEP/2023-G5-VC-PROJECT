<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteUniversityPostController;
use App\Http\Controllers\FavoriteWorkshopPostController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\WorkshopPostController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityPostController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UniversityApplicationController;
use App\Http\Controllers\WorkshopRegistrationController;
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
        Route::get('/getUser', [AuthController::class, 'getUser']);

        // Log out route
        Route::post('/logout', [AuthController::class, 'logout']);

        // update user route
        Route::put('/update/{id}', [AuthController::class, 'updateUser']);

        // register for workshop
        Route::post('/registerWorkshop', [WorkshopRegistrationController::class, 'store']);

        Route::get('/getMyTicket', [WorkshopRegistrationController::class, 'showByUser']);
        //store university application
        Route::post('/universityApplication', [UniversityApplicationController::class, 'store']);

        Route::get('/showWorkshop/{id}', [WorkshopRegistrationController::class, 'show']);
        // university routes
        Route::prefix('/university')->group(function(){
            // crud university
            Route::resource('/universities', UniversityController::class);
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
            Route::post('/favoriteWorkshopPost',[FavoriteWorkshopPostController::class,'store']);
            // delete favaite university post
            Route::delete('/favoriteWorkshopPost/{workshop_post_id}', [FavoriteWorkshopPostController::class, 'destroy']);
            // get list of favorite workshop
            Route::get('/getListOfFavrite',[FavoriteWorkshopPostController::class,'getListOfFavorite']);
            // get user id
            Route::get('/selectByUser', [WorkshopPostController::class, 'selctByUserId']);

            Route::get('/getWorkshop/{id}', [WorkshopPostController::class, 'show']);
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
    // get university apps
    Route::get('/getUniversityApplication', [UniversityApplicationController::class, 'index']);
});

// Expired routes
Route::prefix('/workshop')->group(function(){
    Route::post('/favorites',[FavoriteWorkshopPostController::class,'store']);
    Route::get('/workshopDetail/{id}', [WorkshopPostController::class,'show']);
    Route::get('/expirepost', [WorkshopPostController::class,'getWorkshopPostExprired']);
    Route::get('/newUpdate', [WorkshopPostController::class,'getWorkshopLastUpdated']);
    Route::get('/workshopPost', [WorkshopPostController::class, 'index']);
    Route::get('/', [WorkshopPostController::class, 'index']);
    Route::post('/post', [WorkshopPostController::class, 'store']);
    Route::get('/{id}', [WorkshopPostController::class, 'selctByUserId']);
});

// Role routes
Route::resource('/role', RoleController::class);

// Login / register routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/googleLogin', [GoogleAuthController::class, 'googleLogin']);


Route::get('/majors',[MajorController::class,'index']);






Route::fallback(function () {
    return "Sorry we cannot found!!😥😣";
});
