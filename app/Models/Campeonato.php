<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campeonato extends Model
{
    use HasFactory;
    protected $table='campeonatos';
    public $timestamps=true;

    public function equipos():BelongsToMany
    {
        return $this->belongsToMany(Equipo::class, 'campeonatos_equipos')->withPivot(
            ['posicion']);
    }
    public function partidos():HasMany
    {
        return $this->hasMany(Partido::class);
    }

}
