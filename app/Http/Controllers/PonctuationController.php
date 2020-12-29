<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PonctuationController extends Controller
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


    public function insert($form_id)
    {
        $inscrito = Formulario::findOrFail($form_id);
        return view('ponctuation.insert', compact('inscrito'));
    }

    public function insertVI($form_id)
    {
        $inscrito = Formulario::findOrFail($form_id);
        return view('ponctuation.insertVI', compact('inscrito'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->request->all());

        //VERIFICAR CARTEIRA DE CONSELHO
        if (!empty($request->ax_conselho)) {
            $ax_conselho = 1;
            $ponc_conselho = 0;
        } else {
            $ax_conselho = 0;
        }
        //VERIFICAR GRADUACAO
        if (!empty($request->ax_graduacao) && $request->ax_graduacao != "0") {
            $ax_graduacao = 1;
            $ponc_graduacao = 20;
        } else {
            $ax_graduacao = 0;
            $ponc_graduacao = 0;
        }
        //VERIFICAR DOUTORADO
        if (!empty($request->ax_doutorado) && $request->ax_doutorado != "0") {
            $ax_doutorado = 1;
            $ponc_doutorado = 15;
        } else {
            $ax_doutorado = 0;
            $ponc_doutorado = 0;
        }
        //VERIFICAR MESTRADO
        if (!empty($request->ax_mestrado) && $request->ax_mestrado != '0') {
            $ax_mestrado = 1;
            $ponc_mestrado = 10;
        } else {
            $ax_mestrado = 0;
            $ponc_mestrado = 0;
        }
        //VERIFICAR POS1
        if (!empty($request->ax_posgraduacao1) && $request->ax_posgraduacao1 != '0') {
            $ax_posgraduacao1 = 1;
            $ponc_posgraduacao1 = 7.5;
        } else {
            $ax_posgraduacao1 = 0;
            $ponc_posgraduacao1 = 0;
        }
        //VERIFICAR POS2
        if (!empty($request->ax_posgraduacao2) && $request->ax_posgraduacao2 != '0') {
            $ax_posgraduacao2 = 1;
            $ponc_posgraduacao2 = 7.5;
        } else {
            $ax_posgraduacao2 = 0;
            $ponc_posgraduacao2 = 0;
        }

        //VERIFICAR QUALIFICACAO1
        if (!empty($request->ax_qualific1)) {
            $ax_qualific1 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_qualific1 = 6;
            } else {
                $ponc_qualific1 = 4;
            }
        } else {
            $ax_qualific1 = 0;
            $ponc_qualific1 = 0;
        }
        //VERIFICAR QUALIFICACAO2
        if (!empty($request->ax_qualific2)) {
            $ax_qualific2 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_qualific2 = 6;
            } else {
                $ponc_qualific2 = 4;
            }
        } else {
            $ax_qualific2 = 0;
            $ponc_qualific2 = 0;
        }
        //VERIFICAR QUALIFICACAO3
        if (!empty($request->ax_qualific3)) {
            $ax_qualific3 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_qualific3 = 6;
            } else {
                $ponc_qualific3 = 4;
            }
        } else {
            $ax_qualific3 = 0;
            $ponc_qualific3 = 0;
        }
        //VERIFICAR QUALIFICACAO4
        if (!empty($request->ax_qualific4)) {
            $ax_qualific4 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_qualific4 = 6;
            } else {
                $ponc_qualific4 = 4;
            }
        } else {
            $ax_qualific4 = 0;
            $ponc_qualific4 = 0;
        }
        //VERIFICAR QUALIFICACAO5
        if (!empty($request->ax_qualific5)) {
            $ax_qualific5 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_qualific5 = 6;
            } else {
                $ponc_qualific5 = 4;
            }
        } else {
            $ax_qualific5 = 0;
            $ponc_qualific5 = 0;
        }

        //VERIFICAR ESPECIALIZAÇÃO
        if (!empty($request->ax_espe1)) {
            $ax_espe1 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_espe1 =$request->ax_espe1;
            } else {
                $ponc_espe1 = $request->ax_espe1;
            }
        } else {
            $ax_espe1 = 0;
            $ponc_espe1 = 0;
        }
        //VERIFICAR ESPECIALIZAÇÃO2
        if (!empty($request->ax_espe2)) {
            $ax_espe2 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_espe2 = $request->ax_espe2;
            } else {
                $ponc_espe2 = $request->ax_espe2;
            }
        } else {
            $ax_espe2 = 0;
            $ponc_espe2 = 0;
        }
        //VERIFICAR ESPECIALIZAÇÃO3
        if (!empty($request->ax_espe3)) {
            $ax_espe3 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_espe3 =$request->ax_espe3;
            } else {
                $ponc_espe3 = $request->ax_espe3;
            }
        } else {
            $ax_espe3 = 0;
            $ponc_espe3 = 0;
        }
        //VERIFICAR ESPECIALIZAÇÃO4
        if (!empty($request->ax_espe4)) {
            $ax_espe4 = 1;
            if ($request->escolaridade == 1 || $request->escolaridade == 2){
                $ponc_espe4 = $request->ax_espe4;
            } else {
                $ponc_espe4 = $request->ax_espe4;
            }
        } else {
            $ax_espe4 = 0;
            $ponc_espe4 = 0;
        }

        //VERIFICAR LAUDO
        if(!empty($request->ax_laudo)){
            $ax_laudo = 1;
        } else {
            $ax_laudo = 0;
        }

        $geral = $ponc_graduacao + $ponc_doutorado + $ponc_mestrado
        + $ponc_posgraduacao1 + $ponc_posgraduacao2 + $ponc_qualific1 +
        $ponc_qualific2 + $ponc_qualific3 + $ponc_qualific4 + $ponc_qualific5 +
        $ponc_espe1 + $ponc_espe2 + $ponc_espe3 + $ponc_espe4;

        if ($geral > 100) {
            return redirect()->route('formulario.lista')->with('message', "Falha ao realizar avaliação, pois passou o limite de pontos.");
        }


       \App\Models\Ponctuation::create([
           'formulario_id' => $request->form_id,
           'user_id' => Auth::user()->id,
           'ax_cpf' => 1,
           'ax_org' => 1,
           'ax_curriculum' => 1,
           'ax_escolaridade' => 1,
           'ax_conselho' => $ax_conselho,
           'ax_graduacao' => $ax_graduacao,
           'ax_doutorado' => $ax_doutorado,
           'ax_mestrado' => $ax_mestrado,
           'ax_posgraduacao1' => $ax_posgraduacao1,
           'ax_posgraduacao2' => $ax_posgraduacao2,
           'ax_qualific1' => $ax_qualific1,
           'ax_qualific2' => $ax_qualific2,
           'ax_qualific3' => $ax_qualific3,
           'ax_qualific4' => $ax_qualific4,
           'ax_qualific5' => $ax_qualific5,
           'ax_espe1' => $ax_espe1,
           'ax_espe2' => $ax_espe2,
           'ax_espe3' => $ax_espe3,
           'ax_espe4' => $ax_espe4,
           'ax_laudo' => $ax_laudo,
           'ponc_graduacao' => $ponc_graduacao,
           'ponc_doutorado' => $ponc_doutorado,
           'ponc_mestrado' =>  $ponc_mestrado,
           'ponc_posgraduacao1' => $ponc_posgraduacao1,
           'ponc_posgraduacao2' => $ponc_posgraduacao2,
           'ponc_qualific1' => $ponc_qualific1,
           'ponc_qualific2' => $ponc_qualific2,
           'ponc_qualific3' => $ponc_qualific3,
           'ponc_qualific4' => $ponc_qualific4,
           'ponc_qualific5' => $ponc_qualific5,
           'ponc_espe1' => $ponc_espe1,
           'ponc_espe2' => $ponc_espe2,
           'ponc_espe3' => $ponc_espe3,
           'ponc_espe4' => $ponc_espe4
       ]);

        //echo $request->form_id;
        $formulario = Formulario::find($request->form_id);
        //$user = User::find($request->user_id);

        $formulario->update([
            'avaliado' => true,
            'id_avaliador' => Auth::user()->id,
            'dataAvaliacao' => date('Y-m-d'),
        ]);

        if (!$formulario) {
            return redirect()->route('formulario.lista')->with('message', "Falha ao realizar avaliação.");
        }
        return redirect()->route('formulario.lista')->with('message', 'Avaliação realizada com sucesso.');
    }

    public function indeferido(Request $request){
        $formulario = Formulario::find($request->form_id);
        if (!empty($request->motivoDoc)) {
            $formulario->update([
                'id_avaliador' => Auth::user()->id,
                'avaliado' => 1,
                'indeferido' => 1,
                'dataAvaliacao' => date('Y-m-d'),
                'descricaoIndeferido' => $request->motivoDoc
            ]);
            echo 1;
        }
        else {
            $formulario->update([
                'id_avaliador' => Auth::user()->id,
                'avaliado' => 1,
                'indeferido' => 1,
                'dataAvaliacao' => date('Y-m-d'),
                'descricaoIndeferido' => $request->motivoPne
            ]);
            echo 2;
        }

        if (!$formulario) {
            return redirect()->route('formulario.lista')->with('message', "Falha ao indeferir.");
        }
        return redirect()->route('formulario.lista')->with('message', 'Indeferimento realizada com sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
