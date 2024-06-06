<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partido extends Model

{
    use HasFactory;
    protected $table='partidos';
    public $timestamps=true;

    public function campeonatos():BelongsTo
    {
        return $this->belongTo(Campeonato::Class);
    }

    public function resultados():HasMany
    {
        return $this->hasMany(Resultado::class);
    }
}

