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
        'id_subkriteria',
    ];

    /**
     * Get all of the kriteria for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kriteria()
    {
        return $this->hasMany(Kriteria::class);
    }

    /**
     * Get all of the alternatif for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alternatif()
    {
        return $this->hasMany(Alternatif::class);
    }

    /**
     * Get all of the subkriteria for the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subkriteria()
    {
        return $this->hasMany(SubKriteria::class);
    }
}
