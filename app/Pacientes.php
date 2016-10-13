<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    //
    protected $table = 'paciente';

    protected $fillable = ['pac_nacionalidad','pac_contacto','pac_telcon','pac_tarjeta',
        'pac_grupoSanguineo','pac_aseguradora'];

    protected $guarded = ['pac_id'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

}
