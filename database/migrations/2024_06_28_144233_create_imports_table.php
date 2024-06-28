<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // create_imports_table.php
public function up() {
    Schema::create('imports', function (Blueprint $table) {
        $table->id();
        $table->integer('quantity');
        $table->decimal('value', 15, 2);
        $table->string('country_origin');
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
        Schema::dropIfExists('imports');
    }
};
