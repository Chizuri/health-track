<?php

//Apellido adicional a la clase que permita diferenciarla
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    /**
     * fillable: Dentro de este array se pueden especificar cuáles de los campos de la tabla pueden ser llenados
     * con asignación masiva (que es el caso cuando enviamos un formulario creando un array asociativo para ser guardado).
     */
    //le indicamos a laravel las columnas que queremos cargar
    //cuando llamamos a metodos como create

    protected $fillable = ['cit_paciente', 'cit_doctor',
                           'cit_consultorio', 'cit_fecha', 'cit_hora', 'cit_tipo',
                           'cit_observacion', 'cit_estado'];

    /**
     * guarded: Esta propiedad indica que los campos definidos allí no pueden ser llenados usando Mass Assignment,
     * por lo cual nunca debería enviarse un Input::get() o cualquier otro tipo de datos o arreglo
     * proveniente de un controlador manipulable por un usuario.
     */
    protected $guarded = ['cit_consecutivo'];

    public function Persona()
    {
        return $this->hasMany(Persona::class);
    }

}