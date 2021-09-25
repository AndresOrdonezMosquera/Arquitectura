<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\TipoDocumento;
use App\Model\NivelEducativo;
use App\Model\Profesion;

class Persona extends Model
{
    public function tipo_documento(){
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id', 'id');
    }

    public function nivel_educativo(){
        return $this->belongsTo(NivelEducativo::class, 'nivel_educativo_id', 'id');
    }

    public function profesion(){
        return $this->belongsTo(Profesion::class, 'profesion_id', 'id');
    }

    protected $table = 'persona';
}

