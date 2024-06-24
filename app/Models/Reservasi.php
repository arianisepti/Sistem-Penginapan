<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination',
        'check_in',
        'check_out',
        'rooms',
        'adults',
        'children',
        'email',
        'phone',
        'status',
        'payment_method',
        'total_amount',
    ];
}
