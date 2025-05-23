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
       Schema::create('cars', function (Blueprint $table) {
    $table->id();
    $table->string('model');
    $table->string('make');
    $table->integer('year');
    $table->decimal('price_per_day', 8, 2);
    $table->integer('seating_capacity');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
