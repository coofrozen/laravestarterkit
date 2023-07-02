<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// register route goes here 
Route::post('/register',[AuthController::class,'register']);
// login route goes here 
Route::post('/login',[AuthController::class,'login']);

// animal 
Route::get('/animals',[AnimalController::class,'index']);
Route::get('/animals/{id}',[AnimalController::class,'show']);
Route::get('/animals/search/{type}',[AnimalController::class,'search']);

// movies 
Route::get('/movies',[MovieController::class,'index']);
Route::get('/movies/{id}',[MovieController::class,'show']);
Route::get('/movies/search/{type}',[MovieController::class,'search']);

Route::post('/movies',[MovieController::class,'store']);
Route::put('/movies/{id}',[MovieController::class,'update']);
Route::delete('movies/{id}',[MovieController::class,'destroy']);



Route::group(['middleware'=> ['auth:sanctum']],function(){
    Route::post('/animals',[AnimalController::class,'store']);
    Route::put('/animals/{id}',[AnimalController::class,'update']);
    Route::delete('animals/{id}',[AnimalController::class,'destroy']);
    Route::post('/logout',[AuthController::class,'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
