<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'bobot_kriteria'
    ];
}
