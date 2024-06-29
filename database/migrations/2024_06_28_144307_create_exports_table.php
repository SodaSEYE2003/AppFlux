<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // create_exports_table.php
public function up() {
    Schema::create('exports', function (Blueprint $table) {
        $table->id();
        $table->integer('quantity');
        $table->integer('value');
        $table->string('main_destinations');
        $table->date('departure_date');
        $table->date('arrival_date');
        $table->unsignedBigInteger('marchandises_id');
        $table->foreign('marchandises_id')->references('id')->on('marchandises');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};
