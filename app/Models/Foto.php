<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';

    protected $guarded = ['id'];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }
}
