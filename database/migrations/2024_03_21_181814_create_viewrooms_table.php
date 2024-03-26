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
        DB::statement("
        CREATE VIEW viewrooms AS (
            select rm.province,rm.image_room,rt.room_no,rt.hotel_no,rt.bed,rt.price,rt.type_image,rt.capacity,rt.description from roomtype rt
            INNER JOIN room rm on rm.hotel_no = rt.hotel_no
         )
      ");
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS viewrooms');
    }
};
