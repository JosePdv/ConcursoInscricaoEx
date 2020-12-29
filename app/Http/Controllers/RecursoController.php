<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formulario;
use App\Models\Recurso;
use App\Models\Ponctuation;
use Illuminate\Support\Facades\Auth;

class RecursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $recursos = Recurso::paginate(40);

        return view('recurso.recursoLista')->with('recursos', $recursos);

    }

      public function recursoUnico($id)
    {
        $recurso = Recurso::findOrFail($id);
        $pontuacao = Ponctuation::where('formulario_id', $recurso->formularios->id)->first();
        return view('recurso.recurso')->with([
            'recurso' => $recurso,
            'pontuacao' => $pontuacao
        ]);
    }
      public function recursoUnicoVI($id)
    {
        $recurso = Recurso::findOrFail($id);
        $pontuacao = Ponctuation::where('formulario_id', $recurso->formularios->id)->first();
        return view('recurso.recursoVI')->with([
            'recurso' => $recurso,
            'pontuacao' => $pontuacao
        ]);
    }



//VAI REALIZAR A AVALIACAO DO RECURSO
    public function avaliar(Request $request)
    {
                   //VERIFICAR SE O RECURSO FOI ACEITO OU NAO (1 PARA ACEITO 2 PARA NEGADO)
        if ($request->recurso_aceito == 1) {

            //Dados puxados do recurso
            $recurso = Recurso::findOrFail($request->recurso_id);

            //Dados puxados do ponctuation
            $pontuacao = Ponctuation::where('formulario_id', $recurso->formularios->id)->first();

            //Variavel para fazer o controller, verificar se houve edicao na tabela pontuacition
            $editado = false;
            //ALTERAR O STATUS DE INDEFERIDO PARA DEFERIDO
            $fomulario = Formulario::findOrFail($recurso->formularios->id);

            $fail = $fomulario->update([
                "indeferido" => 0,
                "aprovado" => 1,
            ]);  


            #VERIFICACAO SE HOUVE EDICAO NA PONTUACAO DE GRADUACA PARA MEDIO E FUNDAMENTAL
            if (!empty($pontuacao)) {

                if ($recurso->formularios->escolaridade != '3') {
                    if ($request->ax_graduacao != $pontuacao->ponc_graduacao) {
                        $editado = true;
                    }
                } else if ($recurso->formularios->escolaridade == '3') {#VERIFICACAO DA FORMACAO ACADEMIFICA PARA ENSINO SUPERIOR
                    if ($request->ax_doutorado != $pontuacao->ponc_doutorado && $recurso->formularios->escolaridade == '3') {
                        $editado = true;
                    }
                    if ($request->ax_mestrado != $pontuacao->ponc_mestrado && $recurso->formularios->escolaridade == '3') {
                        $editado = true;
                    }
                    if ($request->ax_posgraduacao1 != $pontuacao->ponc_posgraduacao1 && $recurso->formularios->escolaridade == '3') {
                        $editado = true;
                    }
                    if ($request->ax_posgraduacao2 != $pontuacao->ponc_posgraduacao2 && $recurso->formularios->escolaridade == '3') {
                        $editado = true;
                    }
                } #VERIFICAR SE HOUVE EDICAO NA PONTUACAO DE QUALIFICIACAO
                if ($request->ax_qualific1 != $pontuacao->ponc_qualific1) {
                    $editado = true;
                }
                if ($request->ax_qualific2 != $pontuacao->ponc_qualific2) {
                    $editado = true;
                }
                if ($request->ax_qualific3 != $pontuacao->ponc_qualific3) {
                    $editado = true;
                }
                if ($request->ax_qualific4 != $pontuacao->ponc_qualific4) {
                    $editado = true;
                }
                if ($request->ax_qualific5 != $pontuacao->ponc_qualific5) {
                    $editado = true;
                } #VERIFICACAO SE HOUVE EDICAO NA PONTUACAO DE EXPERIENCIA
                if ($request->ax_espe1 != $pontuacao->ponc_espe1) {
                    $editado = true;
                }
                if ($request->ax_espe2 != $pontuacao->ponc_espe2) {
                    $editado = true;
                }
                if ($request->ax_espe3 != $pontuacao->ponc_espe3) {
                    $editado = true;
                }
                if ($request->ax_espe4 != $pontuacao->ponc_espe4) {
                    $editado = true;
                }
            } else if (empty($pontuacao)) { #CASO O USARIO N TENHA NOTA
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
                        $ponc_espe1 = $request->ax_espe1;
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
                        $ponc_espe3 = $request->ax_espe3;
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
                    if ($request->escolaridade == 1 || $request->escolaridade == 2) {
                        $ponc_espe4 = $request->ax_espe4;
                    } else {
                        $ponc_espe4 = $request->ax_espe4;
                    }
                } else {
                    $ax_espe4 = 0;
                    $ponc_espe4 = 0;
                }

                //VERIFICAR LAUDO
                if (!empty($request->ax_laudo)) {
                    $ax_laudo = 1;
                } else {
                    $ax_laudo = 0;
                }

                $geral = $ponc_graduacao + $ponc_doutorado + $ponc_mestrado
                    + $ponc_posgraduacao1 + $ponc_posgraduacao2 + $ponc_qualific1 +
                    $ponc_qualific2 + $ponc_qualific3 + $ponc_qualific4 + $ponc_qualific5 +
                    $ponc_espe1 + $ponc_espe2 + $ponc_espe3 + $ponc_espe4;

                if ($geral > 100) {
                    return redirect()->route('recurso.lista')->with('message', "Falha ao avaliar recurso com sucesso.");
                }

                echo $editado;

                #AGORA CRIA A PONTUACAO
                Ponctuation::create([
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
                    'ponc_mestrado' => $ponc_mestrado,
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
                    'ponc_espe4' => $ponc_espe4,
                ]);

                #AGORA ATUALZIAR NO RECURSO
                 #ADICONAR NO O UPDATE NA TELA DE RECURSO
                $recurso->update([
                    'avaliador_id' => Auth::user()->id,
                    'recurso_aceito' => 1,
                    'recurso_editado' => 1,
                    'data_verificacao_recurso' => date('Y-m-d'),
                ]);
                return redirect()->route('recurso.lista')->with('message', "Recurso avaliado com sucesso.");

            }
            #REALIZAR O UPDATE NA TABELA PONTUACAO
            if ($editado == true && !empty($pontuacao)) {
                if ($recurso->formularios->escolaridade != 3) { #UPDATE PARA ENSINO MEDIO E FUNDAMENTAL
                    $fail = $pontuacao->update([
                        'ponc_graduacao' => $request->ax_graduacao,
                        'ponc_qualific1' => $request->ax_qualific1,
                        'ponc_qualific2' => $request->ax_qualific2,
                        'ponc_qualific3' => $request->ax_qualific3,
                        'ponc_qualific4' => $request->ax_qualific4,
                        'ponc_qualific5' => $request->ax_qualific5,
                        'ponc_espe1' => $request->ax_espe1,
                        'ponc_espe2' => $request->ax_espe2,
                        'ponc_espe3' => $request->ax_espe3,
                        'ponc_espe4' => $request->ax_espe4,
                    ]);

                    if ($fail == 1) { #ADICONAR NO O UPDATE NA TELA DE RECURSO
                        $recurso->update([
                            'avaliador_id' => Auth::user()->id,
                            'recurso_aceito' => 1,
                            'recurso_editado' => 1,
                            'data_verificacao_recurso' => date('Y-m-d'),
                        ]);
                        return redirect()->route('recurso.lista')->with('message', "Recurso avaliado com sucesso.");
                    } else {
                        return redirect()->route('recurso.lista')->with('message', "Falha ao avaliar recurso com sucesso.");
                    }
                } else { #UPDATE NO ENSINO SUPERIOR
                    $fail = $pontuacao->update([
                        'ponc_doutorado' => $request->ax_doutorado,
                        'ponc_mestrado' => $request->ax_mestrado,
                        'ponc_posgraduacao1' => $request->ax_posgraduacao1,
                        'ponc_posgraduacao2' => $request->ax_posgraduacao2,
                        'ponc_qualific1' => $request->ax_qualific1,
                        'ponc_qualific2' => $request->ax_qualific2,
                        'ponc_qualific3' => $request->ax_qualific3,
                        'ponc_qualific4' => $request->ax_qualific4,
                        'ponc_qualific5' => $request->ax_qualific5,
                        'ponc_espe1' => $request->ax_espe1,
                        'ponc_espe2' => $request->ax_espe2,
                        'ponc_espe3' => $request->ax_espe3,
                        'ponc_espe4' => $request->ax_espe4,
                    ]);

                    if ($fail == 1) { #ADICONAR NO O UPDATE NA TELA DE RECURSO
                        $recurso->update([
                            'avaliador_id' => Auth::user()->id,
                            'recurso_aceito' => 1,
                            'recurso_editado' => 1,
                            'data_verificacao_recurso' => date('Y-m-d'),
                        ]);
                        return redirect()->route('recurso.lista')->with('message', "Recurso avaliado com sucesso.");
                    } else {
                        return redirect()->route('recurso.lista')->with('message', "Fala ao avaliar recurso com sucesso.");
                    }
                }
            }

            if($editado == false && !empty($pontuacao)){
               $fail = $recurso->update([
                            'avaliador_id' => Auth::user()->id,
                            'recurso_aceito' => 1,
                            'recurso_editado' => 0,
                            'data_verificacao_recurso' => date('Y-m-d'),
                        ]);
                return redirect()->route('recurso.lista')->with('message', "Recurso avaliado com sucesso.");

                if ($fail == 1) {
                        return redirect()->route('recurso.lista')->with('message', "Falha ao avaliar recurso com sucesso.");
                }
            }

        } else {
            $recurso = Recurso::findOrFail($request->recurso_id);
            $fail = $recurso->update([
                'recurso_aceito' => 2,
                'recurso_editado' => 2,
                'data_verificacao_recurso' => date('Y-m-d'),
            ]);

            if ($fail == 1) {
                return redirect()->route('recurso.lista')->with('message', "Recurso avaliado com sucesso.");
            }
        }

    }
}
