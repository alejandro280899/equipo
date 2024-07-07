<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $fillable = ['goles_fuera', 'fecha', 'goles_casa', 'codigo', 'equipo_local_id', 'equipo_visitante_id'];

    public function goles()
    {
        return $this->hasMany(Gol::class);
    }
    public function equipos(){
        return $this->belongsToMany(Equipo::class,'partido_equipos');
    }
}
