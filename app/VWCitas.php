<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VWCitas extends Model
{
    //
    protected $table = 'vwcitas';

    protected $readOnly = ['paciente'];

    public function Persona()
    {
        return $this->hasMany(Persona::class);
    }

}
