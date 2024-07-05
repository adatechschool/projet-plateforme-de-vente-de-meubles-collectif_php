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

    // Définition d'une route pour les requêtes OPTIONS
Route::options('{any}', function (Request $request) {
    // Retourne une réponse JSON vide avec le statut HTTP 204 (No Content)
    return response()->json([], 204);
})->where('any', '.*');


Route::options('{any}', function (Request $request) {
    return response()->json([], 204);
})->where('any', '.*');

// Route pour récupérer les produits avec des images spécifiques de meubles depuis Unsplash
Route::get('/products', function () {
    $imageUrls = [
        "https://images.unsplash.com/photo-1563298723-dcfebaa392e3?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1507089947368-19c1da9775ae?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1496412705862-e0088f16f791?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1573804633927-3b71aad42d7e?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1519710164239-da123dc03ef4?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1592194996308-7a5962894a86?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1578894380021-8b7267b71e05?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1567016523586-5f93cf5cf0c8?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1519985176271-adb1088fa94c?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1556911220-e15b36dca198?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1560518883-ce09059eeffa?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1555041469-0e4a7f16b2d7?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1501045661006-fcebe0257c3f?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1567016555116-8fcfea73951e?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1573883439169-3df698bf6c91?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1578894380700-8b7267b71e04?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578047-dfb367046420?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578046-dfb367046421?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578045-dfb367046422?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578044-dfb367046423?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578043-dfb367046424?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578042-dfb367046425?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578041-dfb367046426?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578040-dfb367046427?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578039-dfb367046428?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578038-dfb367046429?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578037-dfb367046430?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578036-dfb367046431?fit=max&fm=jpg&q=80&w=800",
        "https://images.unsplash.com/photo-1511512578035-dfb367046432?fit=max&fm=jpg&q=80&w=800"
    ];

    $products = [];
    for ($i = 0; $i < 30; $i++) {
        $product = [
            "id" => $i + 1,
            "productName" => "Produit " . ($i + 1),
            "categoryId" => rand(1, 5),
            "description" => "Description du produit " . ($i + 1),
            "price" => number_format(rand(10, 100), 2),
            "color" => random_color(),
            "material" => random_material(),
            "quantity" => rand(1, 10),
            "status" => random_status(),
            "image" => $imageUrls[$i % count($imageUrls)], // Assurez-vous d'obtenir une image de meuble
            "created_at" => null,
            "updated_at" => null
        ];
        $products[] = $product;
    }
    return $products;
});

// Fonctions pour générer des données aléatoires
function random_color() {
    $colors = ['rouge', 'bleu', 'vert', 'jaune', 'noir', 'blanc', 'gris', 'marron', 'rose', 'orange'];
    return $colors[array_rand($colors)];
}

function random_material() {
    $materials = ['bois', 'métal', 'plastique', 'verre', 'tissu', 'cuir', 'pierre', 'céramique'];
    return $materials[array_rand($materials)];
}

function random_status() {
    $statuses = ['disponible', 'indisponible', 'en rupture de stock', 'en stock', 'en attente'];
    return $statuses[array_rand($statuses)];
}







