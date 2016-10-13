<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultasClinicas extends Model
{
    //
    protected $table = 'vwconsultasclinicas';

    protected $readOnly = ['Cedula'];

}
