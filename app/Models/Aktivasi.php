<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_baa',
        'target_aktivasi'
    ];
}
