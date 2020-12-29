@extends('layouts.layer')

@section('content')

    <script src="{{ asset('js/form.js') }}"></script>

    <form method="POST" action="{{ route('formulario.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header fundo font-weight-bold">Dados Pessoais</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Nome do(a) Candidato
                                    (a): </label>

                                <div class="col-md-8">
                                    <input id="nome" type="text"
                                           class="form-control @error('nome') is-invalid @enderror"
                                           name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus
                                           required="preencha">

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="iescolaridade"
                                       class="col-md-4 col-form-label text-md-right">Escolaridade Do Cargo: </label>
                                <div class="col-md-6">
                                    <select name="escolaridade" id="iescolaridade" class="custom-select">
                                        <option value="0" {{old('escolaridade') == '0' ? 'selected' : ''}}>
                                            Selecione uma opção
                                        </option>
                                        <option value="1" {{old('escolaridade') == '1' ? 'selected' : ''}}>
                                            Ensino Médio Técnico
                                        </option>
                                        <option value="2" {{old('escolaridade') == '2' ? 'selected' : ''}}>
                                            Ensino Médio
                                        </option>
                                        <option value="3" {{old('escolaridade') == '3' ? 'selected' : ''}}>
                                            Ensino Superior
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo
                                    Pretendido: </label>
                                <div class="col-md-6">
                                    <select name="cargo" id="cargo" class="custom-select">
                                        <option value="0" {{old('cargo') == '0' ? 'selected' : ''}} >
                                            Selecione uma opção
                                        </option>

                                        <!-- NIVEL MÉDIO/TÉCNICO-->
                                        <option value="1" {{old('cargo') == '1' ? 'selected' : ''}} hidden="true"
                                                class="divCargos1">
                                            Técnico de Laboratório
                                        </option>

                                        <!-- NIVEL MÉDIO -->
                                        <option value="2" {{old('cargo') == '1' ? 'selected' : ''}} hidden="true"
                                                class="divCargos2">
                                            Agente de Vigilância em Saúde
                                        </option>
                                        <option value="3" {{old('cargo') == '2' ? 'selected' : ''}} hidden="true"
                                                class="divCargos2">
                                            Auxiliar de Fármacia
                                        </option>
                                        <option value="4" {{old('cargo') == '3' ? 'selected' : ''}} hidden="true"
                                                class="divCargos2">
                                            Educador Social
                                        </option>


                                        <!-- NIVEL SUPERIOR-->

                                        <option value="5" {{old('cargo') == '4' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Médico Clínico Geral
                                        </option>
                                        <option value="6" {{old('cargo') == '5' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Enfermeiro
                                        </option>
                                        <option value="7" {{old('cargo') == '6' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Psicólogo
                                        </option>
                                        <option value="8" {{old('cargo') == '7' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Nutricionista
                                        </option>
                                        <option value="9" {{old('cargo') == '8' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Farmacêutico
                                        </option>
                                        <option value="10" {{old('cargo') == '9' ? 'selected' : ''}} hidden="true"
                                                class="divCargos3">
                                            Cirurgião Dentista
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de
                                    Nascimento: </label>

                                <div class="col-md-3">
                                    <input id="data_nascimento" type="text"
                                           class="date form-control @error('data_nascimento') is-invalid @enderror"
                                           name="data_nascimento" value="{{ old('data_nascimento') }}"
                                           autocomplete="data_nascimento" autofocus>

                                    @error('data_nascimento')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="estado_civil" class="col-md-4 col-form-label text-md-right">Estado Civil:
                                </label>

                                <div class="col-md-3">
                                    <select name="estado_civil" class="custom-select">
                                        <option value="1" {{old('estado_civil') == '1' ? 'selected' : ''}}>
                                            Solteiro(a)
                                        </option>
                                        <option value="2" {{old('estado_civil') == '2' ? 'selected' : ''}}>
                                            Casado(a)
                                        </option>
                                        <option value="3" {{old('estado_civil') == '3' ? 'selected' : ''}}>
                                            Divorciado(a)
                                        </option>
                                        <option value="4" {{old('estado_civil') == '4' ? 'selected' : ''}}>
                                            Viuvo(a)
                                        </option>
                                        <option value="5" {{old('estado_civil') == '5' ? 'selected' : ''}}>
                                            União Estável
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo: </label>

                                <div class="col-md-3">
                                    <select name="sexo" class="custom-select">
                                        <option value="f" {{old('sexo') == 'f' ? 'selected' : ''}}>
                                            Feminino
                                        </option>
                                        <option value="m" {{old('sexo') == 'm' ? 'selected' : ''}}>
                                            Masculino
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rg" class="col-md-4 col-form-label text-md-right">RG: </label>

                                <div class="col-md-4">
                                    <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror"
                                           name="rg" value="{{ old('rg') }}" autocomplete="rg" autofocus>

                                    @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rg_org" class="col-md-4 col-form-label text-md-right">Orgão expedidor RG:
                                </label>

                                <div class="col-md-2">
                                    <input id="rg_org" type="text"
                                           class="form-control @error('rg_org') is-invalid @enderror" name="rg_org"
                                           value="{{ old('rg_org') }}" autocomplete="rg_org" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF: </label>

                                <div class="col-md-4">
                                    <input id="cpf" type="text"
                                           class="cpf form-control @error('cpf') is-invalid @enderror"
                                           name="cpf" value="{{ old('cpf') }}" autocomplete="cpf" autofocus>

                                    @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nome_mae" class="col-md-4 col-form-label text-md-right">Nome da
                                    Mãe: </label>

                                <div class="col-md-8">
                                    <input id="nome_mae" type="text"
                                           class="form-control @error('nome_mae') is-invalid @enderror" name="nome_mae"
                                           value="{{ old('nome_mae') }}" autocomplete="nome_mae" autofocus>

                                    @error('nome_mae')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone: </label>

                                <div class="col-md-4">
                                    <input id="telefone" type="text"
                                           class="phone_with_ddd form-control @error('telefone') is-invalid @enderror"
                                           name="telefone" value="{{ old('telefone') }}" autocomplete="telefone"
                                           autofocus>

                                    @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail: </label>

                                <div class="col-md-8">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Documentos pessoais -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold">Anexos Documentos Pessoais(Só é valido arquivo
                            .pdf)-Máximo 5MB Cada um
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="anexocpf" class="col-md-4 col-form-label text-md-right">Cadastro de Pessoa
                                    Física – CPF: </label>
                                <div class="col-md-8">
                                    <input id="anexocpf" type="file"
                                           class="form-control @error('anexocpf') is-invalid @enderror"
                                           name="anexocpf" value="{{ old('anexocpf') }}" autocomplete="anexocpf"
                                           autofocus>

                                    @error('anexocpf')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexorg" class="col-md-4 col-form-label text-md-right">Documento Oficial de
                                    Identidade Com Foto: </label>
                                <div class="col-md-8">
                                    <input id="anexorg" type="file"
                                           class="form-control @error('anexorg') is-invalid @enderror"
                                           name="anexorg" value="{{ old('anexorg') }}" autocomplete="anexorg" autofocus>

                                    @error('anexorg')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexocurriculum" class="col-md-4 col-form-label text-md-right">Curriculum
                                    Vitae: </label>
                                <div class="col-md-8">
                                    <input id="anexocurriculum" type="file"
                                           class="form-control @error('anexocurriculum') is-invalid @enderror"
                                           name="anexocurriculum" value="{{ old('anexocurriculum') }}"
                                           autocomplete="anexocurriculum" autofocus>

                                    @error('anexocurriculum')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoescolaridade" class="col-md-4 col-form-label text-md-right">Comprovante
                                    de
                                    Escolaridade<p><b>(De acordo com requisitos do cargo)</b></p></label>
                                <div class="col-md-8">
                                    <input id="anexoescolaridade" type="file"
                                           class="form-control @error('anexoescolaridade') is-invalid @enderror"
                                           name="anexoescolaridade" value="{{ old('anexoescolaridade') }}"
                                           autocomplete="anexoescolaridade" autofocus>

                                    @error('anexoescolaridade')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoconselho" class="col-md-4 col-form-label text-md-right divConselho"
                                       hidden="true">
                                    Registro do Conselho Regional da classe

                                </label>

                                <div class="col-md-8 divConselho" hidden="true">
                                    <input id="anexoconselho" type="file"
                                           class="form-control @error('anexoconselho') is-invalid @enderror"
                                           name="anexoconselho" value="{{ old('anexoconselho') }}"
                                           autocomplete="anexoconselho" autofocus>

                                    @error('anexoconselho')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anexos de formação academica -->

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold divanexosFormacao" hidden="true">Anexos Formação
                            Acadêmica(Só é valido arquivo .pdf-Máximo 5MB Cada um )itens para avaliação de títulos
                        </div>
                        <div class="card-body divEnsFundamentalMedio" hidden="true">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right divMedio" hidden="true">
                                    Certificado ou Diploma de Conclusão<p> <b>(Conforme o edital)</b></p>
                                </label>
                                <label for="email" class="col-md-4 col-form-label text-md-right divFundamental"
                                       hidden="true">
                                    Certificado ou Diploma de Conclusão<p> <b>(Conforme o edital)</b></p>
                                </label>

                                <div class="col-md-8">
                                    <input id="anexograduacao" type="file"
                                           class="form-control @error('anexograduacao') is-invalid @enderror"
                                           name="anexograduacao" value="{{ old('anexograduacao') }}"
                                           autocomplete="anexograduacao" autofocus>

                                    @error('anexograduacao')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="form-group row divGraduacao3" hidden="true">
                            <label for="anexodoutorado" class="col-md-4 col-form-label text-md-right">Residência ou Mestrado
                                Profissional<p><b>(conforme o edital)</b></p></label>
                            <div class="col-md-8">
                                <input id="anexodoutorado" type="file"
                                       class="form-control @error('anexodoutorado') is-invalid @enderror"
                                       name="anexodoutorado" value="{{ old('anexodoutorado') }}"
                                       autocomplete="anexodoutorado" autofocus>

                                @error('anexodoutorado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <label for="anexomestrado" class="col-md-4 col-form-label text-md-right">Mestrado
                                Acadêmico ou Residência <p><b>(Conforme o edital)</b></p></label>
                            <div class="col-md-8">

                                <input id="anexomestrado" type="file"
                                       class="form-control @error('anexomestrado') is-invalid @enderror"
                                       name="anexomestrado" value="{{ old('anexomestrado') }}"
                                       autocomplete="anexomestrado" autofocus>

                                @error('anexomestrado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="anexoposgraduacao1" class="col-md-4 col-form-label text-md-right">Pós-graduação
                                (Lato
                                Sensu) - <b>Especialização 01</b>:</label>
                            <div class="col-md-8">
                                <input id="anexoposgraduacao1" type="file"
                                       class="form-control @error('anexoposgraduacao1') is-invalid @enderror"
                                       name="anexoposgraduacao1" value="{{ old('anexoposgraduacao1') }}"
                                       autocomplete="anexoposgraduacao1" autofocus>

                                @error('anexoposgraduacao1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="anexoposgraduacao2" class="col-md-4 col-form-label text-md-right">Pós-graduação
                                (Lato
                                Sensu) - <b>Especialização 02</b>:</label>
                            <div class="col-md-8">

                                <input id="anexoposgraduacao2" type="file"
                                       class="form-control @error('anexoposgraduacao2') is-invalid @enderror"
                                       name="anexoposgraduacao2" value="{{ old('anexoposgraduacao2') }}"
                                       autocomplete="anexoposgraduacao2" autofocus>

                                @error('anexoposgraduacao2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Anexo qualificação Profissional -->

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold">Anexos Qualificação e Aperfeiçoamento
                            Profissional(Só é valido arquivo .pdf-Máximo 5MB Cada um)itens para avaliação de títulos
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="anexoqualific1" class="col-md-4 col-form-label text-md-right">Qualificação e
                                    Aperfeiçoamento 01: </label>
                                <div class="col-md-8">

                                    <input id="anexoqualific1" type="file"
                                           class="form-control @error('anexoqualific1') is-invalid @enderror"
                                           name="anexoqualific1" value="{{ old('anexoqualific1') }}"
                                           autocomplete="anexoqualific1" autofocus>

                                    @error('anexoqualific1')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="anexoqualific2" class="col-md-4 col-form-label text-md-right">Qualificação e
                                    Aperfeiçoamento 02: </label>
                                <div class="col-md-8">

                                    <input id="anexoqualific2" type="file"
                                           class="form-control @error('anexoqualific2') is-invalid @enderror"
                                           name="anexoqualific2" value="{{ old('anexoqualific2') }}"
                                           autocomplete="anexoqualific2" autofocus>

                                    @error('anexoqualific2')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoqualific3" class="col-md-4 col-form-label text-md-right">Qualificação e
                                    Aperfeiçoamento 03: </label>
                                <div class="col-md-8">

                                    <input id="anexoqualific3" type="file"
                                           class="form-control @error('anexoqualific3') is-invalid @enderror"
                                           name="anexoqualific3" value="{{ old('anexoqualific3') }}"
                                           autocomplete="anexoqualific3" autofocus>

                                    @error('anexoqualific3')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <label for="anexoqualific4" class="col-md-4 col-form-label text-md-right">Qualificação e
                                    Aperfeiçoamento 04: </label>
                                <div class="col-md-8">
                                    <input id="anexoqualific4" type="file"
                                           class="form-control @error('anexoqualific4') is-invalid @enderror"
                                           name="anexoqualific4" value="{{ old('anexoqualific4') }}"
                                           autocomplete="anexoqualific4" autofocus>

                                    @error('anexoqualific4')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoqualific5" class="col-md-4 col-form-label text-md-right">Qualificação e
                                    Aperfeiçoamento 05: </label>
                                <div class="col-md-8">

                                    <input id="anexoqualific5" type="file"
                                           class="form-control @error('anexoqualific5') is-invalid @enderror"
                                           name="anexoqualific5" value="{{ old('anexoqualific5') }}"
                                           autocomplete="anexoqualific5" autofocus>

                                    @error('anexoqualific5')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Experiencia -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold">Anexos Experiência na Função(Só é valido
                            arquivo .pdf-Máximo 5MB Cada um)itens para avaliação de títulos
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="anexoespe1" class="col-md-4 col-form-label text-md-right">Experiência na
                                    Função
                                    01: </label>
                                <div class="col-md-8">
                                    <input id="anexoespe1" type="file"
                                           class="form-control @error('anexoespe1') is-invalid @enderror"
                                           name="anexoespe1" value="{{ old('anexoespe1') }}"
                                           autocomplete="anexoespe1" autofocus>

                                    @error('anexoespe1')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <label for="anexoespe2" class="col-md-4 col-form-label text-md-right">Experiência na
                                    Função
                                    02: </label>
                                <div class="col-md-8">

                                    <input id="anexoespe2" type="file"
                                           class="form-control @error('anexoespe2') is-invalid @enderror"
                                           name="anexoespe2" value="{{ old('anexoespe2') }}"
                                           autocomplete="anexoespe2" autofocus>

                                    @error('anexoespe2')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoespe3" class="col-md-4 col-form-label text-md-right">Experiência na
                                    Função 03: </label>
                                <div class="col-md-8">
                                    <input id="anexoespe3" type="file"
                                           class="form-control @error('anexoespe3') is-invalid @enderror"
                                           name="anexoespe3" value="{{ old('anexoespe3') }}"
                                           autocomplete="anexoespe3" autofocus>

                                    @error('anexoespe3')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="anexoespe4" class="col-md-4 col-form-label text-md-right">Experiência na
                                    Função 04: </label>
                                <div class="col-md-8">
                                    <input id="anexoespe4" type="file"
                                           class="form-control @error('anexoespe4') is-invalid @enderror"
                                           name="anexoespe4" value="{{ old('anexoespe4') }}"
                                           autocomplete="anexoespe4" autofocus>

                                    @error('anexoespe4')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PNE -->
            <div class="row justify-content-center divPne" hidden="true">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold">PNE</div>

                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-md-12 ">
                                    <p class="text-justify">
                                        Deseja participar da reseva
                                        de vagas destinadas a candidato na condição de pessoa com deficiência, conforme
                                        previsto
                                        no Decreto Federal nº 3.298/1999
                                    </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vagas_deficiencia" class="col-md-4 col-form-label text-md-right">Participar:
                                </label>
                                <div class="col-md-4">
                                    <select name="vagas_deficiencia" id="vagas_deficiencia" class="custom-select">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row divTipoDeficiencia" hidden="true">
                                <label for="tipo_deficiencia" class="col-md-4 col-form-label text-md-right">Tipo de
                                    deficiência:
                                </label>
                                <div class="col-md-4">
                                    <select name="tipo_deficiencia" class="custom-select">
                                        <option value="NaoTem">Selecione uma opção</option>
                                        <option value="Fisica">Física</option>
                                        <option value="Mental">Mental</option>
                                        <option value="Auditiva">Auditiva</option>
                                        <option value="Visual">Visual</option>
                                        <option value="Multipla">Múltipla</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ANEXO LAUDO MÉDICO -->
            <div class="row justify-content-center divLaudo" hidden="true">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header  fundo font-weight-bold">Anexo Laudo Médico(Só é valido arquivo .pdf)
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="anexolaudo" class="col-md-4 col-form-label text-md-right">Laudo
                                    Médico</label>
                                <div class="col-md-8">
                                    <input id="anexolaudo" type="file"
                                           class="form-control @error('anexolaudo') is-invalid @enderror"
                                           name="anexolaudo" value="{{ old('anexolaudo') }}"
                                           autocomplete="anexolaudo" autofocus>

                                    @error('anexolaudo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ENDEREÇO-->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header fundo font-weight-bold">Endereço</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="cep" class="col-md-4 col-form-label text-md-right">CEP: </label>

                                <div class="col-md-4">
                                    <input id="cep" type="text"
                                           class="cep form-control @error('cep') is-invalid @enderror"
                                           name="cep" value="{{ old('cep') }}" autocomplete="cep"
                                           onblur="pesquisacep(this.value);" autofocus>

                                    @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uf" class="col-md-4 col-form-label text-md-right">UF: </label>

                                <div class="col-md-4">
                                    <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror"
                                           name="uf" value="{{ old('uf') }}" autocomplete="uf" autofocus>

                                    @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade: </label>

                                <div class="col-md-4">
                                    <input id="cidade" type="text"
                                           class="form-control @error('cidade') is-invalid @enderror" name="cidade"
                                           value="{{ old('cidade') }}" autocomplete="cidade" autofocus>

                                    @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bairro" class="col-md-4 col-form-label text-md-right">Bairro: </label>

                                <div class="col-md-4">
                                    <input id="bairro" type="text"
                                           class="form-control @error('bairro') is-invalid @enderror" name="bairro"
                                           value="{{ old('bairro') }}" autocomplete="bairro" autofocus>

                                    @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rua" class="col-md-4 col-form-label text-md-right">Endereco(Rua/Avenida):
                                </label>

                                <div class="col-md-4">
                                    <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror"
                                           name="rua" value="{{ old('rua') }}" autocomplete="rua" autofocus>

                                    @error('rua')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">Numero: </label>

                                <div class="col-md-2">
                                    <input id="numero" type="text"
                                           class="form-control @error('numero') is-invalid @enderror"
                                           name="numero"
                                           value="{{ old('numero') }}" autocomplete="numero" autofocus>

                                    @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="complemento"
                                       class="col-md-4 col-form-label text-md-right">Complemento: </label>

                                <div class="col-md-8">
                                    <input id="complemento" type="text"
                                           class="form-control @error('complemento') is-invalid @enderror"
                                           name="complemento"
                                           value="{{ old('complemento') }}" autocomplete="complemento" autofocus>

                                    @error('complemento')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- checkbox -->
                            <div class="form-check col-md-8 offset-md-4">
                                <input class="form-check-input" type="checkbox" value="" id="chekbox"
                                       required="masrque essa opcão">
                                <label class="form-check-label" for="defaultCheck1">
                                    <b class="check"> Declaro que aceito todas as exigências especificadas no Edital de
                                        abertura deste Processo Seletivo, bem
                                        como serem verdadeiras todas as informações aqui prestadas e estou ciente que
                                        qualquer falsa alegação ou
                                        omissão de informações conforme disposto no edital, implicará em minha exclusão
                                        do
                                        processo seletivo,
                                        sujeitando-me, ainda, às penas da lei. Declaro que estar instruído esta ficha de
                                        inscrição com cópias
                                        legíveis, estando ciente em minha desclassificação, caso não esteja.</b>
                                </label>
                            </div>
                            <p></p>

                            <!-- fim form-->
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Enviar Dados') }}
                                    </button>
                                    <p class="aviso">(Verificar se o cargo esta definido e o arquivos estão em pdf)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
