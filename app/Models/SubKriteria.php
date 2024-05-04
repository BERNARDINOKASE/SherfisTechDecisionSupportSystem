<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'nama_subkriteria',
        'nilai_subkriteria',
        'id_kriteria'
    ];

    /**
     * Get the kriteria that owns the SubKriteria
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }

    /**
     * Get the nilai that owns the Kriteria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
