<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = ['numero', 'tipo', 'beneficiario_id'];

    public function beneficiario()
    {
        return $this->belongsTo(Beneficiario::class);
    }
}
