<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'id_alternatif',
        'nama_alternatif',
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
