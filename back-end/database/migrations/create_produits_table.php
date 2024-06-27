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
        Schema::create('Produits', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('Nom_Produit', 100);
            $table->unsignedBigInteger('Categorie_id'); //Démarche pour générer des clefs étrangères
            $table->string('Descriptif');
            $table->decimal('Prix', 10, 2);
            $table->string('Couleur');
            $table->string('Matiere');
            $table->integer('Quantite');
            $table->string('Statut');

            //Définir la clef étrangère
            $table->foreign('Categorie_id')->references('id')->on('Categorie')->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Produits');
    }
};
