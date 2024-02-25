<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'hotal_name',
        'image_hotel',
        'province',
        'description'
    ];
}
