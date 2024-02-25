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
        Schema::create('roomtype', function (Blueprint $table) {
            $table->id();
            $table->string('type_no',255)->nullable();
            $table->string('bed_number',255)->nullable();
            $table->string('price_per_night',255)->nullable();
            $table->longText('description')->nullable();
            $table->string('capacity',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtype');
    }
};
