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
    Route::get('products', [ProductController::class, 'index']);
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

<<<<<<< HEAD
    // Définition d'une route pour les requêtes OPTIONS
Route::options('{any}', function (Request $request) {
    // Retourne une réponse JSON vide avec le statut HTTP 204 (No Content)
    return response()->json([], 204);
})->where('any', '.*');

// Route pour récupérer les produits depuis une API
Route::get('/products', function () {
    return [
        [
            "id" => 1,
            "productName" => "table ancienne",
            "categoryId" => 1,
            "description" => "table années 90 légèrement abimée",
            "price" => "45.00",
            "color" => "marron",
            "material" => "bois",
            "quantity" => 1,
            "status" => "disponible",
            "image" => "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?fit=max&fm=jpg&q=80&w=800",
            "created_at" => null,
            "updated_at" => null
        ],
        [
            "id" => 2,
            "productName" => "chaise moderne",
            "categoryId" => 2,
            "description" => "chaise design contemporaine",
            "price" => "80.00",
            "color" => "noir",
            "material" => "métal",
            "quantity" => 1,
            "status" => "disponible",
            "image" => "https://images.unsplash.com/photo-1563298723-dcfebaa392e3?fit=max&fm=jpg&q=80&w=800",
            "created_at" => null,
            "updated_at" => null
        ]
    ];
});
=======
>>>>>>> 5bc3c21502a8ea43c78195e3d8ea4bd2a1d34428
