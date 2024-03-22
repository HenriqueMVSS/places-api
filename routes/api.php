<?php

use App\Http\Controllers\PlacesController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [PlacesController::class, 'index']);
Route::get('/place/{id}', [PlacesController::class, 'show']);
Route::post('/', [PlacesController::class, 'store']);
Route::put('/place/{id}', [PlacesController::class, 'update']);
Route::delete('/place/{id}', [PlacesController::class, 'destroy']);
