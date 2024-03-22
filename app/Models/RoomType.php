<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $table = 'roomtype';
    protected $fillable = [
        'id',
        'room_no',
        'hotel_no',
        'bed',
        'price',
        'description',
        'capacity',
        'type_image',
        'created_at',
        'updated_at',
    ];
}
