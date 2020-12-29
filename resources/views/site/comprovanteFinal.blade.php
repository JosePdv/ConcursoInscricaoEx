@extends('layouts.comprovante')

@section('content')

    <script src="{{ asset('js/form.js') }}"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header fundo font-weight-bold">Protocolo de inscrição</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Protocolo: </label>

                            <div class="col-md-8">
                                <input name="nome" type="text" class="form-control"
                                       value="{{ $formulario->protocolo }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header fundo font-weight-bold">Dados Pessoais</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Nome: </label>

                            <div class="col-md-8">
                                <input id="nome" type="text"
                                       class="form-control"
                                       name="nome" value="{{$formulario->nome}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="iescolaridade"
                                   class="col-md-4 col-form-label text-md-right">Escolaridade: </label>

                            <div class="col-md-6">
                                <select name="escolaridade" id="iescolaridade" class="custom-select" disabled>
                                    <option value="1" @if($formulario->escolaridade == 1) selected @endif>
                                      Médio Técnico
                                    </option>
                                    <option value="2" @if($formulario->escolaridade == 2) selected @endif>
                                        Ensino Médio
                                    </option>
                                    <option value="3" @if($formulario->escolaridade == 3) selected @endif>
                                        Ensino Superior
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargos: </label>
                            <div class="col-md-6">
                                <select name="cargo" id="cargo" class="custom-select" disabled>
                                    <option value="0" @if ($inscrito->cargo == 0) selected @endif>
                                        Cargo Não Selecionado
                                    </option>
                                    <option value="1" @if($formulario->cargo == 1) selected @endif>
                                        Técnico de Laboratório
                                    </option>
                                    <option value="2" @if($formulario->cargo == 2) selected @endif>
                                        Agente de Vigilância em Saúde
                                    </option>
                                    <option value="3" @if($formulario->cargo == 3) selected @endif>
                                        Auxiliar de Fármacia
                                    </option>
                                    <option value="4" @if($formulario->cargo == 4) selected @endif>
                                        Educador Social
                                    </option>
                                    <option value="5" @if($formulario->cargo == 5) selected @endif>
                                        Médico Clínico Geral
                                    </option>
                                    <option value="6" @if($formulario->cargo == 6) selected @endif>
                                        Enfermeiro
                                    </option>
                                    <option value="7" @if($formulario->cargo == 7) selected @endif>
                                        Psicólogo
                                    </option>
                                    <option value="8" @if($formulario->cargo == 8) selected @endif>
                                       Nutrícionista
                                    </option>
                                     <option value="9" @if($formulario->cargo == 9) selected @endif>
                                       Farmacêutico
                                    </option>
                                     <option value="10" @if($formulario->cargo == 10) selected @endif>
                                       Cirurgião Dentista
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF: </label>

                            <div class="col-md-4">
                                <input id="cpf" type="text"
                                       class="cpf form-control"
                                       name="cpf" value="{{$formulario->cpf}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">RG: </label>
                            <div class="col-md-4">
                                <input id="rg" type="text"
                                       class="form-control"
                                       name="rg" value="{{$formulario->rg}}" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rg_org" class="col-md-4 col-form-label text-md-right">Orgão expedidor
                                RG:
                            </label>

                            <div class="col-md-2">
                                <input id="rg_org" type="text"
                                       class="form-control"
                                       value="{{$formulario->rg_org}}" disabled>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            window.print();
        });

    </script>
@endsection
