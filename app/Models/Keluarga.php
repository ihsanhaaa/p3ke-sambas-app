<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluargas';

    protected $guarded = ['id'];

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    public function Individus()
    {
        return $this->hasMany(Individu::class);
    }
}
