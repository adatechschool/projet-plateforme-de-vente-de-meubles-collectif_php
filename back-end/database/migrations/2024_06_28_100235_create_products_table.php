<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

  public function up(): void
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id()->primary();
                $table->string('productName', 100);
                $table->unsignedBigInteger('categoryId')->nullable(); //Démarche pour générer des clefs étrangères
                $table->longText('description');
                $table->decimal('price', 10, 2);
                $table->string('color');
                $table->string('material');
                $table->integer('quantity');
                $table->string('status');
                $table->string('image')->nullable(); // Champ pour l'image
    
                //Définir la clef étrangère
                $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
                $table->timestamps();
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
