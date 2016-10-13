<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\VWCitas;
/** Contiene la clase Auth::user() **/
use Illuminate\Support\Facades\Auth;

class CitasController extends Controller
{
    public function __construct()
    {
        //only allow authenticated users to access a given route.
        $this->middleware('auth');
    }

    //Muestra el listado de citas
    public function index()	{
        /** Muestra las citas del doctor logueado 
        $citas = VWCitas::all()->where('doctor', '=', Auth::user()->id);
		**/
		$citas = VWCitas::all();
        //dd($citas);
        return View('clinica.citas', compact('citas'));
    }

}
