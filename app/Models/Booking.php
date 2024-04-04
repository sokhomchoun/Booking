<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'id',
        'room_no',
        'roomtype',
        'guest',
        'email',
        'phone_number',
        'check_in_date',
        'check_out_date',
        'payment',
        'status',
        'bed'
    ];
}
