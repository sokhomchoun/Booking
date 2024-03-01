<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambodia extends Model
{
    use HasFactory;
    protected $table = 'cambodia';
    protected $fillable = [
        'id',
        'province',
        'province_image'
    ];
}
