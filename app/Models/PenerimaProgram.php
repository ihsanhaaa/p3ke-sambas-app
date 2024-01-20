<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenerimaProgram extends Model
{
    use HasFactory;

    protected $table = 'penerima_programs';

    protected $guarded = ['id'];

    public function individu()
    {
        return $this->belongsTo(Individu::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
