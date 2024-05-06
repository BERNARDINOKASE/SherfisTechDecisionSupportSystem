<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = [
        'id_alternatif',
        'id_kriteria',
        'kondisi'
    ];

    /**
     * Get all of the kriteria for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    /**
     * Get all of the alternatif for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }
}
