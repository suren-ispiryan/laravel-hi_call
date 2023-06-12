<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\ChatController;
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
    // get users
    Route::get('/get-users', [ChatController::class, 'getUsers']);
    Route::get('/get-auth-user', [ChatController::class, 'getAuthUser']);
    // messages
    Route::post('/sendMessage', [ChatController::class, 'createMessage']);
    Route::get('/get-messages', [ChatController::class, 'getMessages']);
});


