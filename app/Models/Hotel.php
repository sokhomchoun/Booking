<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotel';
    protected $fillable = [
        'id',
        'hotel_name',
        'image_hotel',
        'province',
        'category_name',
        'description'
    ];
}
