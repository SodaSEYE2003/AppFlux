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
        Schema::create('analystes', function (Blueprint $table) {
            $table->id();
            $table->string('Prenom');
            $table->string('Nom');
            $table->unsignedBigInteger('user_analyste_id');
            $table->foreign('user_analyste_id')->references('id')->on('users');
            $table->unsignedBigInteger('rapport_analyste_id');
            $table->foreign('rapport_analyste_id')->references('id')->on('rapports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analystes');
    }
};
