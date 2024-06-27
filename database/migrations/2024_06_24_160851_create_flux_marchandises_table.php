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
        Schema::create('flux_marchandises', function (Blueprint $table) {
            $table->id();
            $table->enum('typeFlux', ['importation', 'exportation']);
            $table->date('DateDepart');
            $table->date('DateArrivee');
            $table->string('Status');
            $table->unsignedBigInteger('marchandise_id');
            $table->timestamps();
            $table->foreign('marchandise_id')->references('id')->on('marchandises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flux_marchandises');
    }
};
