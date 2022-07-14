<?php

use App\Http\Controllers\ApiFoodController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('foods', ApiFoodController::class);

Route::get('search/{key}', [ApiFoodController::class, 'search']);
// Route::get('/get-product-by-keyword', [ApiFoodController::class, 'searchByName']);
// Route::get('search/{key}', [ApiCarController::class, 'search']);
// Route::get('/show', [ApiFoodController::class, 'search']);
