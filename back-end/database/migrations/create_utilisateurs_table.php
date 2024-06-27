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
        Schema::create('Utilisateurs', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('Pseudo');
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('Adresse');
            $table->string('N°_Tel');
            $table->string('Email')->unique();
            $table->string('Mot_de_passe');
            $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Utilisateurs');
    }
};
