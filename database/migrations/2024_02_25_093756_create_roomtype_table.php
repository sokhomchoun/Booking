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
            $table->string('room_no',255)->nullable();
            $table->string('hotel_no',255)->nullable();
            $table->string('bed',255)->nullable();
            $table->longText('price')->nullable();
            $table->string('description',255)->nullable();
            $table->string('capacity',255)->nullable();
            $table->string('type_image',255)->nullable();
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
