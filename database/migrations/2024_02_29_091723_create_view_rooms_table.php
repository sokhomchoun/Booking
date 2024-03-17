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
        CREATE VIEW view_rooms AS (
            select rm.image_room,rt.type_no,rt.bed_number,rt.price_per_night,rt.capacity,rt.description from roomtype rt
            INNER JOIN room rm on rm.type_no = rt.type_no
         )
      ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS view_rooms');
    }
};
