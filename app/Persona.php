<?php

//Apellido adicional a la clase que permita diferenciarla
namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    /**
     * fillable: Dentro de este array se pueden especificar cuáles de los campos de la tabla pueden ser llenados
     * con asignación masiva (que es el caso cuando enviamos un formulario creando un array asociativo para ser guardado).
     */
    //le indicamos a laravel las columnas que queremos cargar
    //cuando llamamos a metodos como create

    protected $fillable = ['per_nombre1','per_nombre2','per_ape_pater','per_ape_mater',
                           'per_fecnac','per_genero','per_estCivil','per_provincia',
                           'per_direccion','per_activo'];

    /**
     * guarded: Esta propiedad indica que los campos definidos allí no pueden ser llenados usando Mass Assignment,
     * por lo cual nunca debería enviarse un Input::get() o cualquier otro tipo de datos o arreglo
     * proveniente de un controlador manipulable por un usuario.
     */
    protected $guarded = ['per_id'];

    //Este metodo va a retornar un relacion de eloquent
    //En este caso belongsTo porque una persona pertenece a un usuario
    //Argumentos: 1. Modelo relacionado
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}