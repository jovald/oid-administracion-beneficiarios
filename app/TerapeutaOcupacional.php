<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerapeutaOcupacional extends Model
{
    protected $fillable = ['rut', 'nombres', 'apellidos', 'telefono', 'fecha_nacimiento', 'direccion'];

    public function ingresoTerapiaOcupacional()
    {
        return $this->hasOne(FichaTerapiaOcupacional::class);
    }
}
