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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id")->constrained()->cascadeOnDelete();
            $table->string("no_cni",11)->unique();
            $table->string("nom");
            $table->string("prenom");
            $table->string("login");
            $table->string('email');
            $table->string('sexe')->nullable();
            $table->string('password');
            $table->date("date_naissance");
            $table->string('ville_residence')->nullable();
            $table->string('pays_residence')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('profession')->nullable();
            $table->date('date_adhesion');
            $table->timestamps();
            $table->rememberToken();
                        $table->timestamp('email_verified_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
