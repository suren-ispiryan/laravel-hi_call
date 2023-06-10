<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
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

// sign
Route::post('register', [SignController::class, 'register']);
Route::post('login', [SignController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    // logout
    Route::get('/logout', [SignController::class, 'logout']);
});
