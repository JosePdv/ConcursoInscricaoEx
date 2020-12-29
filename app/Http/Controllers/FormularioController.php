<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Formulario;
use App\Http\Requests\FormularioRequest;
use App\Mail\MailSuporte;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class FormularioController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(FormularioRequest $request)
    {

        $formData = $request->all();

        $formData['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $formData['data_nascimento']);

        $formulario = Formulario::create($formData);


        if (!empty($request->file('anexocpf'))) {
            $formulario->anexocpf = $request->file('anexocpf')->store('anexos');
        }
        if (!empty($request->file('anexorg'))) {
            $formulario->anexorg = $request->file('anexorg')->store('anexos');
        }
        if (!empty($request->file('anexocurriculum'))) {
            $formulario->anexocurriculum = $request->file('anexocurriculum')->store('anexos');
        }
        if (!empty($request->file('anexoescolaridade'))) {
            $formulario->anexoescolaridade = $request->file('anexoescolaridade')->store('anexos');
        }
        if (!empty($request->file('anexoconselho'))) {
            $formulario->anexoconselho = $request->file('anexoconselho')->store('anexos');
        }
        if (!empty($request->file('anexograduacao'))) {
            $formulario->anexograduacao = $request->file('anexograduacao')->store('anexos');
        }

        if (!empty($request->file('anexodoutorado'))) {
            $formulario->anexodoutorado = $request->file('anexodoutorado')->store('anexos');
        }

        if (!empty($request->file('anexomestrado'))) {
            $formulario->anexomestrado = $request->file('anexomestrado')->store('anexos');
        }
        if (!empty($request->file('anexoposgraduacao1'))) {
            $formulario->anexoposgraduacao1 = $request->file('anexoposgraduacao1')->store('anexos');
        }
        if (!empty($request->file('anexoposgraduacao2'))) {
            $formulario->anexoposgraduacao2 = $request->file('anexoposgraduacao2')->store('anexos');
        }
        if (!empty($request->file('anexoqualific1'))) {
            $formulario->anexoqualific1 = $request->file('anexoqualific1')->store('anexos');
        }
        if (!empty($request->file('anexoqualific2'))) {
            $formulario->anexoqualific2 = $request->file('anexoqualific2')->store('anexos');
        }
        if (!empty($request->file('anexoqualific3'))) {
            $formulario->anexoqualific3 = $request->file('anexoqualific3')->store('anexos');
        }
        if (!empty($request->file('anexoqualific4'))) {
            $formulario->anexoqualific4 = $request->file('anexoqualific4')->store('anexos');
        }
        if (!empty($request->file('anexoqualific5'))) {
            $formulario->anexoqualific5 = $request->file('anexoqualific5')->store('anexos');
        }
        if (!empty($request->file('anexoespe1'))) {
            $formulario->anexoespe1 = $request->file('anexoespe1')->store('anexos');
        }
        if (!empty($request->file('anexoespe2'))) {
            $formulario->anexoespe2 = $request->file('anexoespe2')->store('anexos');
        }
        if (!empty($request->file('anexoespe3'))) {
            $formulario->anexoespe3 = $request->file('anexoespe3')->store('anexos');
        }
        if (!empty($request->file('anexoespe4'))) {
            $formulario->anexoespe4 = $request->file('anexoespe4')->store('anexos');
        }
        if (!empty($request->file('anexolaudo'))){
            $formulario->anexolaudo = $request->file('anexolaudo')->store('anexos');
        }

        if (!empty($formulario)) {
            $formulario->protocolo = "SEMSA" . time() . $formulario->id;

            $formulario->save();

            $message = "Inscrição Realizada com sucesso!";
            $protocolo = $formulario->protocolo;

            //Mail::to($formulario->email)->send(new MailSuporte($formulario));
            return view('site.comprovante', compact('message', 'protocolo'));
        }

        return redirect()->route('formulario.index')->with('message', "Falha ao realizar inscrição.");

    }


    public function listaRevisao(){
        $listaRevisao = DB::table('formularios')->where('avaliado', '1')->paginate(40);

        return view('site.listaRevisao')->with('formularios', $listaRevisao);
    }

}
