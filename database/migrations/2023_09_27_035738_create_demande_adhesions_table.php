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
        Schema::create('demande_adhesions', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->date("date_naissance");
            $table->string("sexe");
            $table->string("no_cni",11)->unique();
            $table->string("ville");
            $table->string("pays");
            $table->string("profession");
            $table->string("email");
            $table->string("photo");
            $table->string("photo_cni");
            $table->foreignId("approuve_par")->constrained("membres","id")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_adhesions');
    }
};
