<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Individu extends Model
{
    use HasFactory;

    protected $table = 'individus';

    protected $guarded = ['id'];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

    public function ketetapanMusdes()
    {
        return $this->hasOne(KetetapanMusdes::class);
    }

    public function penerimaPrograms()
    {
        return $this->hasMany(PenerimaProgram::class);
    }
}
