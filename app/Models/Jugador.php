<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_nac', 'codigo', 'nombre', 'posicion', 'equipo_id'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function goles()
    {
        return $this->hasMany(Gol::class);
    }
}
