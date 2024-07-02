<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Route::apiResource("users"); // Les routes "users.*" de l'API


//CHEMIN + SEXY CHOCOLAT DES URLS //


use App\Http\Controllers\API\UserController;

Route::apiResource("users", UserController::class); // Les routes "users.*" de l'API