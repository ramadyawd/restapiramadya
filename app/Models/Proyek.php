<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'into',
        'lokasi',
        'harga',
    ];

    protected $casts = [
        'harga' => 'int',
    ];
}
