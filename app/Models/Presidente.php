<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;
    protected $fillable = ['dni', 'nombre', 'apellidos', 'fecha_nac', 'año', 'equipo_id'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
