<?php

use Illuminate\Support\Facades\Route;

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


//Chemin pour trouver un utilisateur par ID 
Route::get('/users/{id}', function ($id) {
    $user = App\Models\User::find($id);

    if (!$user) {
        return 'Utilisateur non trouvé';
    }

    return $user;
});

//Chemin qui permet de trouver tout les produits
Route::get('/products', function () {
    $furniture = App\Models\Product::all();

    if (!$furniture) {
        return 'produit non trouvé';
    }

    return $furniture;
});

//Chemin pour trouver les 6 premiers produits 
Route::get('/products/accueil', function () {
    $furniture = App\Models\Product::find([1,2,3,4,5,6]);

    if (!$furniture) {
        return 'produit non trouvé';
    }

    return $furniture;
});

//chemin qui renvoie un produits --> par ID 
Route::get('/products/{id}', function ($id) {
    $furniture = App\Models\Product::find($id);

    if (!$furniture) {
        return 'Utilisateur non trouvé';
    }

    return $furniture->id;
});


//Chemin qui permet de lister les types dans la table Categories
Route::get('/categories', function () {
    $type = App\Models\Category::all();

    if (!$type) {
        return 'Type de produit non trouvé';
    }

    return $type;
});

//Chemin qui permet par ID d'afficher d le types dans la table Categories

// Route::get('/products_categorie/{categoryId}', function ($categoryId) {
//     $toto = App\Models\Product::find($categoryId);
//     $toto = Product::where('categoryId');

//     if (!$toto) {
//         return 'Type de produit non trouvé';
//     }

//     return $toto;
// });