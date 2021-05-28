<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GivebloodController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\UserController;
/*
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('givebloods', [GivebloodController::class, 'store']);
Route::get('givebloods', [GivebloodController::class, 'index']);      
Route::delete('givebloods/{id}', [GivebloodController::class, 'deleteGiveblood']); 
Route::get('edithospital/{id}', [HospitalController::class, 'edit']); 
Route::post('edithospital/{id}', [HospitalController::class, 'update']);
Route::get('edithospital', [HospitalController::class, 'index']);
Route::get('edituser/{id}', [UserController::class, 'edit']); 
Route::post('edituser/{id}', [UserController::class, 'update']);
Route::get('edituser', [UserController::class, 'index']);
