<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMotivoSocial extends Model
{
    protected $fillable = ['nombre'];

    public function motivo_atencion_social()
    {
        return $this->hasMany(MotivoAtencionSocial::class);
    }
}