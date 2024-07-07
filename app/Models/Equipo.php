<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['año', 'aforo', 'codigo', 'estadio', 'ciudad', 'nombre'];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }

    public function presidente()
    {
        return $this->hasOne(Presidente::class);
    }

    public function partidos() {
        return $this->belongsToMany(Partido::class,'partido_equipos');
    }
}
