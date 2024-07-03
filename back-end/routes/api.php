<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CartController;

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

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::apiResource('users', UserController::class);
// Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::get('/add-images', [ProductController::class, 'addImagesToProducts']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Route::apiResource("users"); // Les routes "users.*" de l'API


//CHEMIN + SEXY CHOCOLAT DES URLS //
// Route::middleware('auth:sanctum')->group(function () {
    Route::get('cart', [CartController::class, 'index']);
    Route::post('cart', [CartController::class, 'store']);
    Route::put('cart/{id}', [CartController::class, 'update']);
    Route::delete('cart/{id}', [CartController::class, 'destroy']);

