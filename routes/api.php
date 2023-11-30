<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PwdController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pwd', [PwdController::class, 'index']);

Route::post('/pwd', [PwdController::class, 'store']);

Route::get('/pwd/{pwd}', [PwdController::class, 'show']);

Route::put('/pwd/{pwd}', [PwdController::class, 'update']);

Route::delete('/pwd/{pwd}', [PwdController::class, 'destroy']);
