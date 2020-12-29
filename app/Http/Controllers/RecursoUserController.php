<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Recurso;
use Illuminate\Http\Request;
class RecursoUserController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recurso.recursopesquisa');
    }



    public function pedido()
    {
        return view('recurso.recursopedido');
    }

    public function pesquisa(Request $request)
    {
        $formulario = Formulario::where('cpf', $request->input('cpf'))->first();

        if (empty($formulario)) {
            return redirect()->route('recurso');
        }

        return view('recurso.recursopedido')->with('formulario', $formulario);
    }

    public function enviar(Request $request, $id)
    {
        $recurso = Recurso::where('formulario_id', $id)->first();

        if(empty($recurso) ){
            Recurso::create([
                'formulario_id' => $id,
                'recurso' => $request->recurso,
            ]);
            return view('recurso.recursopesquisa')->with('message', 'Recurso enviado com sucesso!');
        }
        else {
            return view('recurso.recursopesquisa')->with('message', 'Você não pode solicitar mais de um recurso!');
        }


    }
}
