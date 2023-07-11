<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolManagerController;
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
    Route::prefix('/auth')->group(function(){
        Route::get('/user', [AuthController::class, 'user']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });

});

Route::prefix('/schoolManager')->group(function(){

});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/Login', [AuthController::class, 'Login']);


Route::fallback(function(){
    return "Sorry we cannot found!!😥😣";
});