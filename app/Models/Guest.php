<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'guest_no',
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'phone_number',
        'email'
    ];
}
