<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function deferido()
    {
        $formulario = Formulario::where('aprovado', 1)->get();

        $pdf = PDF::loadView('/reports/deferido', compact('formulario'));
        return $pdf->setPaper('a4')->stream('Relatorio_Deferido.pdf');
    }

    public function indeferido()
    {
        $formulario = Formulario::where('aprovado', 2)->get();
        $pdf = PDF::loadView('/reports/indeferido', compact('formulario'));

        return $pdf->setPaper('a4')->stream('Relatorio_Indeferido.pdf');
    }

   
}
