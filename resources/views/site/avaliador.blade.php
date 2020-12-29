<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Avaliação do Inscrito</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <div class="row">
        <div class="container align-content-center">
            <a href="http://www.riobranco.ac.gov.br/">
                <img style="width: 15em; display: block;
                    margin-left: auto;
                    margin-right: auto " src="/img/logo-prefeitura-completo.png">
            </a>
        </div>
        <div class="container align-content-center">
            <div class="col col-md-12 text-center">
                <p>
                    Secretaria Municipal de Assistência Social e Direitos Humanos
                </p>
                <p>Processo Seletivo Simplificado para Contratação e Servidores Temporários - Edital 01/2020</p>
                <p>Anexo IV - Formulário de Inscrição</p>
            </div>
        </div>
    </div>

    <main class="py-4">
        <script src="{{ asset('js/form.js') }}"></script>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header font-weight-bold">Dados Pessoais</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Nome: </label>

                                <div class="col-md-8">
                                    <input name="nome" type="text" class="form-control"
                                           value="{{ $inscricao->nome }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Doador De
                                    Sangue: </label>

                                <div class="col-md-6">
                                    <select name="doador" class="custom-select" disabled>
                                        <option value="1" @if ($inscricao->escolaridade == '1') selected @endif>
                                            Não
                                        </option>
                                        <option value="2" @if ($inscricao->escolaridade == '2') selected @endif>
                                            Sim
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Escolaridade: </label>

                                <div class="col-md-6">
                                    <select name="escolaridade" class="custom-select" disabled>
                                        <option value="1" @if ($inscricao->escolaridade == 1) selected @endif>
                                            Ensino Fundamental
                                        </option>
                                        <option value="2" @if ($inscricao->escolaridade == 2) selected @endif>
                                            Ensino Médio
                                        </option>
                                        <option value="2" @if ($inscricao->escolaridade == 3) selected @endif>
                                            Ensino Sperior
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo: </label>

                                <div class="col-md-6">
                                    <select name="cargo" class="custom-select" disabled>
                                        <option value="0" @if ($inscrito->cargo == 0) selected @endif>
                                            Cargo Não Selecionado
                                        </option>
                                        <option value="1" @if ($inscricao->cargo == 1) selected @endif>
                                            Motorista
                                        </option>
                                        <option value="2" @if ($inscricao->cargo == 2) selected @endif>
                                            Agente Social
                                        </option>
                                        <option value="3" @if ($inscricao->cargo == 3) selected @endif>
                                            Visitador do Programa Criança Feliz
                                        </option>
                                        <option value="4" @if ($inscricao->cargo == 4) selected @endif>
                                            Facilitador de Oficina – Especialidade: Violão
                                        </option>
                                        <option value="5" @if ($inscricao->cargo == 5) selected @endif>
                                            Facilitador de Oficina – Especialidade: Canto Coral
                                        </option>
                                        <option value="6" @if ($inscricao->cargo == 6) selected @endif>
                                            Facilitador de Oficina – Especialidade: Dança e Expressão Corporal
                                        </option>
                                        <option value="7" @if ($inscricao->cargo == 7) selected @endif>
                                            Facilitador de Oficina – Especialidade: Desenho e Pintura (tela e outros
                                            materiais)
                                        </option>
                                        <option value="8" @if ($inscricao->cargo == 8) selected @endif>
                                            Facilitador de Oficina – Especialidade: Esporte, Lazer e Recreação
                                        </option>
                                        <option value="9" @if ($inscricao->cargo == 9) selected @endif>
                                            Facilitador de Oficina – Especialidade: Capoeira
                                        </option>
                                        <option value="10" @if ($inscricao->cargo == 10) selected @endif>
                                            Facilitador de Oficina – Especialidade: Xadrez
                                        </option>
                                        <option value="11" @if ($inscricao->cargo == 11) selected @endif>
                                            Psicólogo
                                        </option>
                                        <option value="12" @if ($inscricao->cargo == 12) selected @endif>
                                            Assistente Social
                                        </option>
                                        <option value="13" @if ($inscricao->cargo == 13) selected @endif>
                                            Pedagogo
                                        </option>
                                        <option value="14" @if ($inscricao->cargo == 14) selected @endif>
                                            Coordenador do Programa Criança Feliz
                                        </option>
                                        <option value="15" @if ($inscricao->cargo == 15) selected @endif>
                                            Supervisor do Programa Criança Feliz
                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de
                                    Nascimento: </label>

                                <div class="col-md-3">
                                    <input name="data_nascimento" type="text" class="date form-control"
                                           value="{{ date( 'd/m/Y' , strtotime($inscricao->data_nascimento))}}"
                                           disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="estado_civil" class="col-md-4 col-form-label text-md-right">Estado
                                    Civil:
                                </label>

                                <div class="col-md-3">
                                    <select name="estado_civil" class="custom-select" disabled>
                                        <option value="1" @if ($inscricao->estado_civil==1) selected @endif>
                                            Solteiro(a)
                                        </option>
                                        <option value="2" @if ($inscricao->estado_civil==2) selected @endif>
                                            Casado(a)
                                        </option>
                                        <option value="3" @if ($inscricao->estado_civil==3) selected @endif>
                                            Divorciado(a)
                                        </option>
                                        <option value="4" @if ($inscricao->estado_civil==4) selected @endif>
                                            Viuvo(a)
                                        </option>
                                        <option value="5" @if ($inscricao->estado_civil==5) selected @endif>
                                            União Estável
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo: </label>

                                <div class="col-md-3">
                                    <select name="sexo" class="custom-select" disabled>
                                        <option value="f" @if ($inscricao->sexo == 'f') selected @endif>Feminino
                                        </option>
                                        <option value="m" @if ($inscricao->sexo == 'm') selected @endif>Masculino
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rg" class="col-md-4 col-form-label text-md-right">RG: </label>

                                <div class="col-md-4">
                                    <input id="rg" type="text" class="form-control" name="rg"
                                           value="{{ $inscricao->rg }}" disabled>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="rg_org" class="col-md-4 col-form-label text-md-right">Orgão expedidor
                                    RG:
                                </label>

                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="rg_org"
                                           value="{{ $inscricao->rg_org }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF: </label>

                                <div class="col-md-5">
                                    <input name="cpf" type="text" class="cpf form-control"
                                           value="{{ $inscricao->cpf }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nome_mae" class="col-md-4 col-form-label text-md-right">Nome da Mãe:
                                </label>

                                <div class="col-md-8">
                                    <input name="nome_mae" type="text" class="form-control"
                                           value="{{ $inscricao->nome_mae }}" disabled>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone:
                                </label>

                                <div class="col-md-4">
                                    <input name="telefone" type="text" class="form-control"
                                           value="{{ $inscricao->telefone }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail: </label>

                                <div class="col-md-8">
                                    <input name="email" type="email" class="form-control"
                                           value="{{ $inscricao->email }}" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="card-header font-weight-bold">PNE</div>

                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-md-12 ">
                                    <p class="text-justify">
                                        Deseja participar da reseva
                                        de vagas destinadas a candidato na condição de pessoa com deficiência,
                                        conforme
                                        previsto
                                        no Decreto Federal nº 3.298/1999
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vagas_deficiencia"
                                       class="col-md-4 col-form-label text-md-right">Participar:
                                </label>
                                <div class="col-md-4">
                                    <select name="vagas_deficiencia" class="custom-select" disabled>
                                        <option value="0" @if ($inscricao->vagas_deficiencia == '0') selected
                                            @endif>
                                            Não
                                        </option>
                                        <option value="1" @if ($inscricao->vagas_deficiencia == '1') selected
                                            @endif>
                                            Sim
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tipo_deficiencia" class="col-md-4 col-form-label text-md-right">Tipo de
                                    deficiência:
                                </label>
                                <div class="col-md-4">
                                    <select name="tipo_deficiencia" class="custom-select" disabled>
                                        <option value="NaoTem" @if ($inscricao->tipo_deficiencia == 'NaoTem')
                                        selected @endif>
                                            Não Tem
                                        </option>
                                        <option value="Fisica" @if ($inscricao->tipo_deficiencia == 'Fisica')
                                        selected @endif>
                                            Física
                                        </option>
                                        <option value="Mental" @if ($inscricao->tipo_deficiencia == 'Mental')
                                        selected @endif>
                                            Mental
                                        </option>
                                        <option value="Auditiva" @if ($inscricao->tipo_deficiencia == 'Auditiva')
                                        selected
                                            @endif>
                                            Auditiva
                                        </option>
                                        <option value="Visual" @if ($inscricao->tipo_deficiencia == 'Visual')
                                        selected @endif>
                                            Visual
                                        </option>
                                        <option value="Multipla" @if ($inscricao->tipo_deficiencia == 'Multipla')
                                        selected
                                            @endif>
                                            Múltipla
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header font-weight-bold">PNE</div>

                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-md-12 ">
                                    <p class="text-justify">
                                        Deseja participar da reseva
                                        de vagas destinadas a candidato na condição de pessoa com deficiência,
                                        conforme
                                        previsto
                                        no Decreto Federal nº 3.298/1999
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vagas_deficiencia"
                                       class="col-md-4 col-form-label text-md-right">Participar:
                                </label>
                                <div class="col-md-4">
                                    <select name="vagas_deficiencia" class="custom-select" disabled>
                                        <option value="0" @if ($inscricao->vagas_deficiencia == '0') selected
                                            @endif>
                                            Não
                                        </option>
                                        <option value="1" @if ($inscricao->vagas_deficiencia == '1') selected
                                            @endif>
                                            Sim
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tipo_deficiencia" class="col-md-4 col-form-label text-md-right">Tipo de
                                    deficiência:
                                </label>
                                <div class="col-md-4">
                                    <select name="tipo_deficiencia" class="custom-select" disabled>
                                        <option value="NaoTem" @if ($inscricao->tipo_deficiencia == 'NaoTem')
                                        selected @endif>
                                            Não Tem
                                        </option>
                                        <option value="Fisica" @if ($inscricao->tipo_deficiencia == 'Fisica')
                                        selected @endif>
                                            Física
                                        </option>
                                        <option value="Mental" @if ($inscricao->tipo_deficiencia == 'Mental')
                                        selected @endif>
                                            Mental
                                        </option>
                                        <option value="Auditiva" @if ($inscricao->tipo_deficiencia == 'Auditiva')
                                        selected
                                            @endif>
                                            Auditiva
                                        </option>
                                        <option value="Visual" @if ($inscricao->tipo_deficiencia == 'Visual')
                                        selected @endif>
                                            Visual
                                        </option>
                                        <option value="Multipla" @if ($inscricao->tipo_deficiencia == 'Multipla')
                                        selected
                                            @endif>
                                            Múltipla
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header font-weight-bold">Endereço</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="cep" class="col-md-4 col-form-label text-md-right">CEP: </label>

                                <div class="col-md-4">
                                    <input name="cep" type="text" class="cep form-control"
                                           value="{{$inscricao->cep}}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uf" class="col-md-4 col-form-label text-md-right">UF: </label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="uf" value="{{ $inscricao->uf }}"
                                           disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade: </label>

                                <div class="col-md-4">
                                    <input name="cidade" type="text" class="form-control "
                                           value="{{ $inscricao->cidade }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bairro" class="col-md-4 col-form-label text-md-right">Bairro: </label>

                                <div class="col-md-4">
                                    <input name="bairro" type="text" class="form-control"
                                           value="{{ $inscricao->bairro }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rua"
                                       class="col-md-4 col-form-label text-md-right">Endereco(Rua/Avenida):
                                </label>

                                <div class="col-md-4">
                                    <input name="rua" type="text" class="form-control"
                                           value="{{ $inscricao->rua }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">Numero:
                                </label>

                                <div class="col-md-2">
                                    <input name="numero" type="text" class="form-control"
                                           value="{{ $inscricao->numero }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="complemento" class="col-md-4 col-form-label text-md-right">Complemento:
                                </label>

                                <div class="col-md-8">
                                    <input name="complemento" type="text" class="form-control"
                                           value="{{ $inscricao->complemento }}" disabled>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>

</html>
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        window.print();--}}
{{--    });--}}

{{--</script>--}}
