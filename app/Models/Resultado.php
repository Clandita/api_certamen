<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resultado extends Model
{
    use HasFactory;
    protected $table='resultados';
    public $timestamps=true;

    public function partidos():BelongsTo
    {
        return $this->belongTo(Partido::Class);
    }
}
