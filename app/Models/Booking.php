<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'booking_no',
        'room_no',
        'guest',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status'
    ];
}
