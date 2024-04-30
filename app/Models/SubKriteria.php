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
        'nilai_subkriteria'
    ];

    /**
     * Get the kriteria that owns the SubKriteria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
