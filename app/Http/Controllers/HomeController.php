<?php

namespace App\Http\Controllers;

use App\ConsultasClinicas;
use App\Pacientes;
use App\Persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Cita;
use App\vwcitas;

/** Manipulacion de fechas **/
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //only allow authenticated users to access a given route.
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now('America/Costa_Rica');
        $date = $date->toDateString();
        //dd($date);

        $AllDailyDates_count = vwcitas::all()->where('fecha', '=', $date)->count();

        $AllPatients_count = Pacientes::all()->where('pac_estado', '=', 'A')->count();

        $ClinicalConsultations_count = DB::table('vwconsultasclinicas')
            ->whereDate('fechaHora', '=', $date)->count();
        /**
         * Tambien funciona
         * $ClinicalConsultations_count = DB::table('vwconsultasclinicas')
            ->select(DB::raw('count(*) as count'))
        ->whereDate('fechaHora', '=', $hoy)
        ->get();**/
/**
        $scheduled_count = vwcitas::all()->where('fecha', '=', $hoy)
            ->where('tipo', '=', 'P')
            ->where('estado', '<>', 'T')
            ->count();

        $unscheduled_count = vwcitas::all()->where('fecha', '=', $hoy)
            ->where('tipo', '=', 'NP')
            ->where('estado', '<>', 'T')
            ->count();

        $emergency_count = vwcitas::all()->where('fecha', '=', $hoy)
            ->where('tipo', '=', 'U')
            ->where('estado', '<>', 'T')
            ->count();

        $scheduled_percent = round((($scheduled_count / $AllDailyDates_count) * 100), 2);
        $unscheduled_percent = round((($unscheduled_count / $AllDailyDates_count) * 100), 2);
        $emergency_percent = round((($emergency_count / $AllDailyDates_count) * 100), 2);

        $percents = ['scheduled' => $scheduled_percent,
            'unscheduled' => $unscheduled_percent,
            'emergency' => $emergency_percent];
**/
        //dd($results);
        return View('home', array('dates' => $AllDailyDates_count,
                                  'patients' => $AllPatients_count,
                                  'consultations' => $ClinicalConsultations_count));
        //return View('home', compact('results'));

    }

}
