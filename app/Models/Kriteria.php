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
     * Get the nilai that owns the Kriteria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
