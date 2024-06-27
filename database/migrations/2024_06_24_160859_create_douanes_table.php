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
        Schema::create('douanes', function (Blueprint $table) {
            $table->id();
            $table->string('Prenom');
            $table->string('Nom');
            $table->string('Location');
            $table->unsignedBigInteger('user_douane_id');
            $table->foreign('user_douane_id')->references('id')->on('users');
            $table->unsignedBigInteger('flux_marchandise_douane_id');
            $table->foreign('flux_marchandise_douane_id')->references('id')->on('flux_marchandises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('douanes');
    }
};
