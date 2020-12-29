<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Ponctuation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisaoController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //REALIZAR UMA VERIFICAOCAO PARA SABER ESSA VERIFICACAO
        //SERA PARA SABER SE E DE UM FORMULARIO QUE GEROU PONTOS OU FOI INDEFERIDO
        $formulario = Formulario::find($id);
        $pontuacao = Ponctuation::where('formulario_id', $formulario->id)->first();

        if ($formulario->indeferido == 1 && empty($pontuacao)) { // FOI INDEFERIDO
            return view('revisao.revisao')->with([
                'inscrito' => $formulario,
            ]);
        } else { //PONTUOU
            $pontuacao = Ponctuation::where('formulario_id', $formulario->id)->first();
            return view('revisao.revisao')->with([
                'inscrito' => $formulario,
                'pontuacao' => $pontuacao
            ]);
        }
        //return view('revisao.revisao');
    }


    public function showVI($id)
    {
        //REALIZAR UMA VERIFICAOCAO PARA SABER ESSA VERIFICACAO
        //SERA PARA SABER SE E DE UM FORMULARIO QUE GEROU PONTOS OU FOI INDEFERIDO
        $formulario = Formulario::find($id);
        $pontuacao = Ponctuation::where('formulario_id', $formulario->id)->first();

        if ($formulario->indeferido == 1 && empty($pontuacao)) { // FOI INDEFERIDO
            return view('revisao.revisaoVI')->with([
                'inscrito' => $formulario,
            ]);
        } else { //PONTUOU
            $pontuacao = Ponctuation::where('formulario_id', $formulario->id)->first();
            return view('revisao.revisaoVI')->with([
                'inscrito' => $formulario,
                'pontuacao' => $pontuacao
            ]);
        }
        //return view('revisao.revisao');
    }

    public function aprovado(Request $request){
        $formulario = Formulario::find($request->form_id);
        $formulario->update([
            'idRevisor' => Auth::user()->id,
            'aprovado' => 1,
            'dataRevisao' => date('Y-m-d'),
        ]);
        return redirect()->route('formulario.listaRevisao')->with('message', "Revisao realizada com sucesso.");
    }

    public function reprovado(Request $request){
        $formulario = Formulario::find($request->form_id);
        $pontuacao = Ponctuation::where('formulario_id', $request->form_id);
        if ($pontuacao->delete()) {
            $formulario->update([
                'idRevisor' => Auth::user()->id,
                'aprovado' => 2,
                'dataRevisao' => date('Y-m-d'),
            ]);
        }
        $formulario->update([
            'idRevisor' => Auth::user()->id,
            'aprovado' => 2,
            'dataRevisao' => date('Y-m-d'),
        ]);
        return redirect()->route('formulario.listaRevisao')->with('message', "Revisao realizada com sucesso.");
    }

    public function avaliarNovamente(Request $request){
        $formulario = Formulario::find($request->form_id);
        if (Ponctuation::where('formulario_id', $request->form_id)) {
            $pontuacao = Ponctuation::where('formulario_id', $request->form_id);
            $pontuacao->delete();
        }
        $formulario->update([
            'idRevisor' => Auth::user()->id,
            'avaliado' => 0,
            'dataRevisao' => date('Y-m-d'),
        ]);
        return redirect()->route('formulario.listaRevisao')->with('message', "Revisao realizada com sucesso.");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
