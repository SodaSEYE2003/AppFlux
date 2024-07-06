<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // create_products_table.php
public function up() {
    Schema::create('marchandises', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->longText('description');
        $table->integer('annee');
        $table->integer('quantite');
        $table->integer('valeur');
        $table->string('TypeFlux');
        $table->string('pays');
        $table->timestamps();
    });
}


    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marchandises');
    }
};
