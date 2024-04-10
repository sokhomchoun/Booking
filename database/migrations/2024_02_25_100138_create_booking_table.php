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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('room_no',255)->nullable();
            $table->string('roomtype',255)->nullable();
            $table->string('guest',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone_number',255)->nullable();
            $table->string('check_in_date',255)->nullable();
            $table->string('check_out_date',255)->nullable();
            $table->string('payment',255)->nullable();
            $table->string('status',255)->nullable();
            $table->string('bed',100)->nullable();
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
