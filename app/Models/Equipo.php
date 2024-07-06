<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['año', 'aforo', 'codigo', 'estadio', 'ciudad', 'nombre'];

    public function jugador()
    {
        return $this->hasMany(Jugador::class);
    }

    public function presidente()
    {
        return $this->hasOne(Presidente::class);
    }

    public function partido() {
        return $this->belongsTo(Partido::class);
    }
}
