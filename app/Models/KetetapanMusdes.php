<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KetetapanMusdes extends Model
{
    use HasFactory;

    protected $table = 'ketetapan_musdes';

    protected $guarded = ['id'];

    public function individu()
    {
        return $this->belongsTo(Individu::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
