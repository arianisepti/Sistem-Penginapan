<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;
    protected $table = 'partners';

    protected $fillable = [
        'id',
        'nampart',
        'bkontrak',
        'alamat',
        'notel',
    ];
    public $timestamps = false;
}
