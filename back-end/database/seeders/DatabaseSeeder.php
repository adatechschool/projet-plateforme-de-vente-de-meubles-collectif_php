<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        User::factory(5)->create();

        $categories = [
            ['type'=> 'tables'],
            ['type'=> 'chaises'],
            ['type'=> 'lits'],
            ['type'=> 'buffets'],
            ['type'=> 'commodes'],
            ['type'=> 'bureaux'],
            ['type'=> 'canapés'],
            ['type'=> 'fauteuils'],
            ['type'=> 'armoires'],
            ['type'=> 'bibliothèques'],
        ];
        
        foreach($categories as $categoriesData){
            Category::create($categoriesData);
        }

        $products = [
            ['productName'=> 'table ancienne', 'categoryId'=> 1, 'description'=>'table années 90 légèrement abimée', 'price'=> 45, 'color'=> 'marron', 'material'=> 'bois', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'table formica', 'categoryId'=> 1, 'description'=>'table vintage en bon état', 'price'=>15 , 'color'=> 'rose', 'material'=> 'formica', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'chaise velours', 'categoryId'=> 2, 'description'=>'duo de jolies chaises en velours', 'price'=> 10, 'color'=> 'mauve', 'material'=> 'velours', 'quantity'=> 2, 'status'=>'disponible'],
            ['productName'=> 'chaise vintage', 'categoryId'=> 2, 'description'=>'véritable affaire pour ces chaises design !', 'price'=> 150, 'color'=> 'beige', 'material'=> 'cannage', 'quantity'=> 4, 'status'=>'disponible'],
            ['productName'=> 'lit baldaquin', 'categoryId'=> 3, 'description'=>'lit deux places en très bon état', 'price'=> 40, 'color'=> 'doré', 'material'=> 'métal', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'lit enfant', 'categoryId'=> 3,'description'=>'petit lit enfant 90*120',  'price'=> 15, 'color'=> 'blanc', 'material'=> 'bois', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'buffet', 'categoryId'=> 4,'description'=>'beau buffet trois portes, comme neuf !', 'price'=> 55, 'color'=> 'bleu canard', 'material'=> 'bois teck', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'commode rétro', 'categoryId'=> 5,'description'=>'commode en bon état', 'price'=> 25, 'color'=> 'vert', 'material'=> 'noyer', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'bureau 140*60', 'categoryId'=> 6,'description'=>'bureau Ikea, très bon état',  'price'=> 15, 'color'=> 'noir', 'material'=> 'métal', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'canapé deux places', 'categoryId'=> 7,'description'=>'canapé 180*93cm style cottage',  'price'=> 95, 'color'=> 'beige', 'material'=> 'tissus', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'canapé convertible', 'categoryId'=> 7,'description'=>'canapé convertible fourni avec 5 coussins', 'price'=> 199, 'color'=> 'corail', 'material'=> 'tissus', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'fauteuil design', 'categoryId'=> 8,'description'=>'joli fauteuil Kalune Design, excellent état',  'price'=> 125, 'color'=> 'vert turquoise', 'material'=> 'tissus', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'armoire vintage sur pied', 'categoryId'=> 9,'description'=>'petite armoire sur pied vintage', 'price'=> 59, 'color'=> 'marron', 'material'=> 'bois', 'quantity'=> 1, 'status'=>'disponible'],
            ['productName'=> 'bibliothèque Billy', 'categoryId'=> 10,'description'=>'bibliothèque Billy Ikea avec portes', 'price'=> 20, 'color'=> 'blanc', 'material'=> 'bois', 'quantity'=> 1, 'status'=>'disponible'],


        ];

        foreach($products as $productsData){
           Product::create($productsData);
        }
    }
} 
