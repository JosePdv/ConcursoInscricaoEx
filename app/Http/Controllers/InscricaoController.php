<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class InscricaoController extends Controller
{
    private $itensPagina = 40;

    public function index()
    {
        return view('site.inscricao');
    }

    public function lista()
    {
        $formularios = Formulario::paginate($this->itensPagina);

        return view('site.lista')->with('formularios', $formularios);
    }
}

