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
        'tingkat_kerusakan',
        'bobot_kriteria'
    ];

    /**
     * Get the user associated with the Kriteria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subkriteria()
    {
        return $this->hasOne(SubKriteria::class);
    }
}
