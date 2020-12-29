<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class ComprovanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('comprovante.index');
    }

    public function pesquisa(Request $request)
    {
        $formulario = Formulario::where('cpf', $request->input('cpf'))->first();

        if (empty($formulario)) {
            return redirect()->route('comprovante.index');
        }

        return view('site.comprovanteFinal', compact('formulario'));
    }
}
