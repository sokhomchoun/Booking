<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewRoom extends Model
{
    use HasFactory;
    protected $table = 'viewrooms';
    protected $fillable = [
        'province',
        'image_room',
        'room_no',
        'hotel_no',
        'bed',
        'price',
        'type_image',
        'capacity',
        'description',
    ];
}
