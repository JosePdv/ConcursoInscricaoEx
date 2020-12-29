@extends('layouts.insertlayer')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div onclick="mostrar('proto')" class="card-header fundoIn font-weight-bold">Protocolo de
                        Inscrição
                    </div>
                    <div id="proto" class="card-body hiden">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Protocolo: </label>
                            <div class="col-md-8">
                                <input name="nome" type="text" class="form-control"
                                    value="{{ $inscrito->protocolo }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div onclick="mostrar('dados')" class="card-header fundoIn font-weight-bold">Dados do Candidato
                    </div>
                    <div id="dados" class="card-body hiden">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Nome do(a) Candidato (a):
                             </label>

                            <div class="col-md-8">
                                <input name="nome" type="text" class="form-control"
                                       value="{{ $inscrito->nome }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Escolaridade Do Cargo:
                             </label>

                            <div class="col-md-6">
                                <select name="escolaridade" id="iescolaridade" class="custom-select" disabled>
                                    <option value="1" @if ($inscrito->escolaridade == 1) selected @endif>
                                       Médio Técnico
                                    </option>
                                    <option value="2" @if ($inscrito->escolaridade == 2) selected @endif>
                                        Ensino Médio
                                    </option>
                                    <option value="2" @if ($inscrito->escolaridade == 3) selected @endif>
                                        Ensino Sperior
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo Pretendido: </label>

                            <div class="col-md-6">
                                <select name="cargo" id="cargo" class="custom-select" disabled>
                                    <option value="0" @if ($inscrito->cargo == 0) selected @endif>
                                        Cargo Não Selecionado
                                    </option>
                                    <option value="1" @if ($inscrito->cargo == 1) selected @endif>
                                     Técnico de Laboratório
                                    </option>
                                    <option value="2" @if ($inscrito->cargo == 2) selected @endif>
                                       Agente de Vigilância em Saúde
                                    </option>
                                    <option value="3" @if ($inscrito->cargo == 3) selected @endif>
                                        Auxiliar de Fármacia
                                    </option>

                                    <option value="4" @if ($inscrito->cargo == 4) selected @endif>
                                        Educador Social
                                    </option>
                                    <option value="5" @if ($inscrito->cargo == 5) selected @endif>
                                        Médico Clínico Geral
                                    </option>
                                    <option value="6" @if ($inscrito->cargo == 6) selected @endif>
                                        Enfermeiro
                                    </option>
                                    <option value="7" @if ($inscrito->cargo == 7) selected @endif>
                                        Psicólogo
                                    </option>
                                    <option value="8" @if ($inscrito->cargo == 8) selected @endif>
                                        Nutrícionista
                                    </option>
                                    <option value="9" @if ($inscrito->cargo == 9) selected @endif>
                                       Farmacêutico
                                    </option>
                                    <option value="10" @if ($inscrito->cargo == 10) selected @endif>
                                        Cirurgião Dentista
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de
                                Nascimento: </label>

                            <div class="col-md-3">
                                <input name="data_nascimento" type="text" class="date form-control"
                                       value="{{ date( 'd/m/Y' , strtotime($inscrito->data_nascimento))}}"
                                       disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado_civil" class="col-md-4 col-form-label text-md-right">Estado
                                Civil:
                            </label>

                            <div class="col-md-3">
                                <select name="estado_civil" class="custom-select" disabled>
                                    <option value="1" @if ($inscrito->estado_civil==1) selected @endif>
                                        Solteiro(a)
                                    </option>
                                    <option value="2" @if ($inscrito->estado_civil==2) selected @endif>
                                        Casado(a)
                                    </option>
                                    <option value="3" @if ($inscrito->estado_civil==3) selected @endif>
                                        Divorciado(a)
                                    </option>
                                    <option value="4" @if ($inscrito->estado_civil==4) selected @endif>
                                        Viuvo(a)
                                    </option>
                                    <option value="5" @if ($inscrito->estado_civil==5) selected @endif>
                                        União Estável
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo: </label>

                            <div class="col-md-3">
                                <select name="sexo" class="custom-select" disabled>
                                    <option value="f" @if ($inscrito->sexo == 'f') selected @endif>Feminino
                                    </option>
                                    <option value="m" @if ($inscrito->sexo == 'm') selected @endif>Masculino
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">RG: </label>

                            <div class="col-md-4">
                                <input id="rg" type="text" class="form-control" name="rg"
                                       value="{{ $inscrito->rg }}" disabled>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="rg_org" class="col-md-4 col-form-label text-md-right">Orgão expedidor
                                RG:
                            </label>

                            <div class="col-md-2">
                                <input type="text" class="form-control" name="rg_org"
                                       value="{{ $inscrito->rg_org }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF: </label>

                            <div class="col-md-5">
                                <input name="cpf" type="text" class="cpf form-control"
                                       value="{{ $inscrito->cpf }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome_mae" class="col-md-4 col-form-label text-md-right">Nome da Mãe:
                            </label>

                            <div class="col-md-8">
                                <input name="nome_mae" type="text" class="form-control"
                                       value="{{ $inscrito->nome_mae }}" disabled>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone:
                            </label>

                            <div class="col-md-4">
                                <input name="telefone" type="text" class="form-control"
                                       value="{{ $inscrito->telefone }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail: </label>

                            <div class="col-md-8">
                                <input name="email" type="email" class="form-control"
                                       value="{{ $inscrito->email }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FORM -->
                <!-- O ACTION DO FORMULARIO E ALTERADO ATRAVES DO JS -- PARA PESSOAS INDEFERIDAS -->

                <form action="#" method="post" id="formAction">

                    @csrf
                    <div class="card">
                        <div onclick="mostrar('pne')" class="card-header  fundoIn font-weight-bold">PNE</div>

                        <div id="pne" class="card-body hiden">
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
                                        <option value="0" @if ($inscrito->vagas_deficiencia == '0') selected
                                            @endif>
                                            Não
                                        </option>
                                        <option value="1" @if ($inscrito->vagas_deficiencia == '1') selected
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
                                        <option value="NaoTem" @if ($inscrito->tipo_deficiencia == 'NaoTem')
                                        selected @endif>
                                            Não Tem
                                        </option>
                                        <option value="Fisica" @if ($inscrito->tipo_deficiencia == 'Fisica')
                                        selected @endif>
                                            Física
                                        </option>
                                        <option value="Mental" @if ($inscrito->tipo_deficiencia == 'Mental')
                                        selected @endif>
                                            Mental
                                        </option>
                                        <option value="Auditiva" @if ($inscrito->tipo_deficiencia == 'Auditiva')
                                        selected
                                            @endif>
                                            Auditiva
                                        </option>
                                        <option value="Visual" @if ($inscrito->tipo_deficiencia == 'Visual')
                                        selected @endif>
                                            Visual
                                        </option>
                                        <option value="Multipla" @if ($inscrito->tipo_deficiencia == 'Multipla')
                                        selected
                                            @endif>
                                            Múltipla
                                        </option>
                                    </select>
                                </div>
                                @if ($inscrito->vagas_deficiencia == '1')
                                   @if(!empty($inscrito->anexolaudo))
                                        <div class="col-md-8">
                                            <a href="{{url('/storage/'.$inscrito->anexolaudo)}}" target="_blank">
                                                Anexo Laudo Médico
                                            </a>
                                        </div>
                                    @else
                                        <div class="col-md-8">
                                            Anexo Do Laudo :
                                        </div>
                                        <div class="col-md-6">
                                            <label>Não possui</label>
                                        </div>

                                    @endif
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="card">
                        <div onclick="mostrar('endereco')" class="card-header  fundoIn font-weight-bold">Endereço</div>

                        <div id="endereco" class="card-body hiden">

                            <div class="form-group row">
                                <label for="cep" class="col-md-4 col-form-label text-md-right">CEP: </label>

                                <div class="col-md-4">
                                    <input name="cep" type="text" class="cep form-control"
                                           value="{{$inscrito->cep}}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uf" class="col-md-4 col-form-label text-md-right">UF: </label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="uf" value="{{ $inscrito->uf }}"
                                           disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade: </label>

                                <div class="col-md-4">
                                    <input name="cidade" type="text" class="form-control "
                                           value="{{ $inscrito->cidade }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bairro" class="col-md-4 col-form-label text-md-right">Bairro: </label>

                                <div class="col-md-4">
                                    <input name="bairro" type="text" class="form-control"
                                           value="{{ $inscrito->bairro }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rua"
                                       class="col-md-4 col-form-label text-md-right">Endereco(Rua/Avenida):
                                </label>

                                <div class="col-md-4">
                                    <input name="rua" type="text" class="form-control"
                                           value="{{ $inscrito->rua }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">Numero:
                                </label>

                                <div class="col-md-2">
                                    <input name="numero" type="text" class="form-control"
                                           value="{{ $inscrito->numero }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="complemento" class="col-md-4 col-form-label text-md-right">Complemento:
                                </label>

                                <div class="col-md-8">
                                    <input name="complemento" type="text" class="form-control"
                                           value="{{ $inscrito->complemento }}" disabled>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Anexo de Documentos Pessoais -->
                    <div class="card">
                        <div onclick="mostrar('anexo')" class="card-header  fundoIn font-weight-bold">Anexos Documentos
                            Pessoais
                        </div>
                        <div id="anexo" class="card-body hiden">
                            <div class="form-group row">
                                <label for="anexocpf" class="col-md-4 col-form-label text-md-right">Cadastro de Pessoa
                                    Física – CPF: </label>
                                <div class="col-md-8">
                                    <a href="{{url('storage/'.$inscrito->anexocpf)}}" target="_blank">
                                        Anexo CPF
                                    </a>
                                </div>
                                <label for="anexorg" class="col-md-4 col-form-label text-md-right">Documento Oficial de
                                    Identidade Com Foto: </label>
                                <div class="col-md-8">
                                    <a href="{{url('/storage/'.$inscrito->anexorg)}}" target="_blank">Anexo Documento
                                        Oficial de Identidade</a>

                                </div>
                                <label for="anexocurriculum" class="col-md-4 col-form-label text-md-right">Curriculum
                                    Vitae: </label>
                                <div class="col-md-8">
                                    <a href="{{url('/storage/'.$inscrito->anexocurriculum)}}" target="_blank">
                                        Anexo Curriculum Vitae
                                    </a>
                                </div>
                                <label for="anexoescolaridade" class="col-md-4 col-form-label text-md-right">Comprovante
                                    de
                                    Escolaridade</label>
                                <div class="col-md-8">
                                    <a href="{{url('/storage/'.$inscrito->anexoescolaridade)}}" target="_blank">
                                        Anexo Comprovante De Escolaridade
                                    </a>
                                </div>
                               @if($inscrito->cargo == 1 || $inscrito->cargo == 5 || $inscrito->cargo == 6 || $inscrito->cargo == 7 || $inscrito->cargo == 8 || $inscrito->cargo == 9 || $inscrito->cargo == 10)
                                    <label for="anexoconselho"
                                           class="col-md-4 col-form-label text-md-right divConselho">Carteira
                                        Do Conselho</label>
                                    @if(!empty($inscrito->anexoconselho))
                                    <!-- INPUT INIVISIVEL PARA PASSAR SE ELE TEM OU NAO -->
                                        <input type="number" value="1" hidden="hidden" name="ax_conselho"
                                               id="ax_conselho">
                                        <div class="col-md-8 divConselho">
                                            <a href="{{url('/storage/'.$inscrito->anexoconselho)}}" target="_blank">
                                                Anexo da Carteira de Conselho
                                            </a>
                                        </div>
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">

                                        </div>
                                    @endif
                            @endif

                            <!-- INPUT PARA DIZER O MOTIVO -->
                                <div id="txtMotivoDoc" class="col-md-12 hiden">
                                    <label for="motivo" class="col-md-5 col-form-label text-md-right divConselho">Motivo:</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                  name="motivoDoc"></textarea>
                                    </div>

                                    <div class="col-md-12 text-md-right hiden" id='btnReprovado' style="margin-top: 2%">
                                        <input type="submit" class="btn btn-outline-danger" value="Indeferido">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Anexos Formação Acadêmica -->
                    <div class="card " id="anexoForm">
                        <div onclick="mostrar('formacao')" class="card-header fundoIn font-weight-bold">Formação
                            Acadêmica
                        </div>
                        <div id="formacao" class="card-body hiden">
                            <div class="form-group row">

                                @if ($inscrito->escolaridade == 1)
                                    <label for="anexoGradu" class="col-md-4 col-form-label text-md-right">Graduação: </label>

                                    @if (!empty($inscrito->anexograduacao))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexograduacao)}}" target="_blank">Anexo
                                                 Graduação</a>
                                        </div>
                                        @if (!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_graduacao" id="anexoGradu"
                                                       value="{{$pontuacao->ponc_graduacao}}" disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_graduacao" id="anexoGradu"
                                                       value="0" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_graduacao" id="anexoGradu" min="0" max="40"
                                                   step="50" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @endif

                                @if($inscrito->escolaridade == 2)
                                    <label for="anexoGradu"
                                           class="col-md-4 col-form-label text-md-right">Graduação: </label>
                                    @if (!empty($inscrito->anexograduacao))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexograduacao)}}"
                                               target="_blank">Anexo
                                                de Graduação</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_graduacao" id="anexoGradu" min="0"
                                                       max="40"
                                                       step="50" value="{{$pontuacao->ponc_graduacao}}"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_graduacao" id="anexoGradu" min="0"
                                                       max="40"
                                                       step="50" value="0" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_graduacao" id="anexoGradu" min="0"
                                                   max="40"
                                                   step="50" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @endif

                                @if($inscrito->escolaridade == 3)

                                    <label for="anexoGradu" class="col-md-4 col-form-label text-md-center">Residência ou Mestrado Profissional </label>
                                    @if (!empty($inscrito->anexodoutorado))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexodoutorado)}}"
                                               target="_blank">Residência ou Mestrado Profissional</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_doutorado" id="anexoDout" min="0"
                                                       max="50"
                                                       step="12.5" value="{{$pontuacao->ponc_doutorado}}"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_doutorado" id="anexoDout" min="0"
                                                       max="50"
                                                       step="12.5" value="0"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_doutorado" id="anexoDout" min="0"
                                                   max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoGradu" class="col-md-4 col-form-label text-md-center">Mestrado Acadêmico ou Residência</label>
                                    @if (!empty($inscrito->anexomestrado))

                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexomestrado)}}"
                                               target="_blank">Mestrado Acadêmico ou Residência</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_mestrado" id="anexoMestP" min="0"
                                                       max="50"
                                                       step="12.5" value="{{$pontuacao->ponc_mestrado}}"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_mestrado" id="anexoMestP" min="0"
                                                       max="50"
                                                       step="12.5" value="0"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_mestrado" id="anexoMestP" min="0"
                                                   max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoGradu" class="col-md-4 col-form-label text-md-center">Pós-graduação
                                        (Lato Sensu) - Especialização 01: </label>
                                    @if (!empty($inscrito->anexoposgraduacao1))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoposgraduacao1)}}"
                                               target="_blank">Anexo
                                                de
                                                Especialização 01</a>
                                        </div>
                                        @if (!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_posgraduacao1" id="anexoEsp1" min="0"
                                                       max="50"
                                                       step="12.5" value="{{$pontuacao->ponc_posgraduacao1}}"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_posgraduacao1" id="anexoEsp1" min="0"
                                                       max="50"
                                                       step="12.5" value="0"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_posgraduacao1" id="anexoEsp1" min="0"
                                                   max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif

                                    <label for="anexoGradu" class="col-md-4 col-form-label text-md-center">Pós-graduação
                                        (Lato Sensu) - Especialização 02: </label>
                                    @if (!empty($inscrito->anexoposgraduacao2))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoposgraduacao2)}}"
                                               target="_blank">Anexo
                                                de
                                                Especialização 02</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_posgraduacao1" id="anexoEsp1" min="0"
                                                       max="50"
                                                       step="12.5" value="{{$pontuacao->ponc_posgraduacao2}}"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_posgraduacao1" id="anexoEsp1" min="0"
                                                       max="50"
                                                       step="12.5" value="0"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_posgraduacao2" id="anexoEsp2" min="0"
                                                   max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Anexos Qualificação e Aperfeiçoamento Profissional -->
                    <div class="card " id="anexoQual">
                        <div onclick="mostrar('qualificacao')" class="card-header fundoIn font-weight-bold">Anexos
                            Qualificação e Aperfeiçoamento Profissional
                        </div>
                        <div id="qualificacao" class="card-body hiden">
                            <div class="form-group row">
                                <!-- FUNDAMENTAL E MEDIO-->
                                @if ($inscrito->escolaridade == 1 || $inscrito->escolaridade == 2)
                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 01: </label>
                                    @if (!empty($inscrito->anexoqualific1))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific1)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 01</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific1}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 02: </label>
                                    @if (!empty($inscrito->anexoqualific2))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific2)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 02</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific2}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                       max="6"
                                                       value="0" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 03: </label>
                                    @if (!empty($inscrito->anexoqualific3))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific3)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 03</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific3}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>

                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif

                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 04: </label>
                                    @if (!empty($inscrito->anexoqualific4))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific4)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 04</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific4}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif

                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 05: </label>
                                    @if (!empty($inscrito->anexoqualific5))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific5)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 05</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific5}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif
                                    <div class="col-md-10 alinha">

                                    </div>
                                @endif
                            <!-- Superior -->
                                @if($inscrito->escolaridade == 3)
                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 01: </label>
                                    @if (!empty($inscrito->anexoqualific1))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific1)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 01</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific1}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific1" id="pontuacaoQuali1" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 02: </label>
                                    @if (!empty($inscrito->anexoqualific2))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific2)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 02</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific2}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                       max="6"
                                                       value="0" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific2" id="pontuacaoQuali2" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif


                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 03: </label>
                                    @if (!empty($inscrito->anexoqualific3))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific3)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 03</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific3}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>

                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific3" id="pontuacaoQuali3" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif

                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 04: </label>
                                    @if (!empty($inscrito->anexoqualific4))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific4)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 04</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific4}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific4" id="pontuacaoQuali4" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif

                                    <label for="anexoqualificacao" class="col-md-4 col-form-label text-md-right">Qualificação
                                        e Aperfeiçoamento 05: </label>
                                    @if (!empty($inscrito->anexoqualific5))
                                        <div class="col-md-4">
                                            <a href="{{url('/storage/'.$inscrito->anexoqualific5)}}" target="_blank">Qualificação
                                                e Aperfeiçoamento 05</a>
                                        </div>
                                        @if(!empty($pontuacao))
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                       max="6"
                                                       value="{{$pontuacao->ponc_qualific5}}" step="6"
                                                       disabled="disabled">
                                            </div>
                                        @else
                                            <div class="col-md-4 alinha">
                                                <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                       max="6"
                                                       value="0" step="6" disabled="disabled">
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-4">
                                            <label>Não possui</label>
                                        </div>
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_qualific5" id="pontuacaoQuali5" min="0"
                                                   max="6"
                                                   value="0" disabled="disabled">
                                        </div>
                                    @endif
                                    <div class="col-md-10 alinha">

                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Anexos Experiência na Função -->
                    <div class="card" id="anexoExp">
                        <div onclick="mostrar('experiencia')" class="card-header fundoIn font-weight-bold">Anexos
                            Experiência na Função
                        </div>
                        <div id="experiencia" class="card-body hiden">
                            <div class="form-group row">
                            @if ($inscrito->escolaridade == 1 || $inscrito->escolaridade == 2) <!-- FUNDAMENTAL E MEDIO-->
                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 01: </label>
                                @if (!empty($inscrito->anexoespe1))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe1)}}" target="_blank">Anexo de
                                            Experiência na Função 01</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="50"
                                                   step="12.5" value="{{$pontuacao->ponc_espe1}}" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="50"
                                               step="12.5" value="0" disabled="disabled">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 02: </label>
                                @if (!empty($inscrito->anexoespe2))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe2)}}" target="_blank">Anexo de
                                            Experiência na Função 02</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe2" id="pontuacaoExpe2" min="0" max="50"
                                                   step="12.5" value="{{$pontuacao->ponc_espe2}}" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe2" id="pontuacaoExpe2" min="0" max="50"
                                               step="12.5" value="0" disabled="disabled">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 03: </label>
                                @if (!empty($inscrito->anexoespe3))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe3)}}" target="_blank">Anexo de
                                            Experiência na Função 03</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0"
                                                   max="50"
                                                   step="12.5" value="{{$pontuacao->ponc_espe3}}" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0"
                                                   max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0"
                                               max="50"
                                               step="12.5" value="0" disabled="disabled">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 04: </label>
                                @if (!empty($inscrito->anexoespe4))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe4)}}" target="_blank">Anexo de
                                            Experiência na Função 04</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="50"
                                                   step="12.5" value="{{$pontuacao->ponc_espe4}}" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="50"
                                                   step="12.5" value="0" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="50"
                                               step="12.5" value="0" disabled="disabled">
                                    </div>
                                @endif
                                <div class="col-md-10 alinha">

                                </div>

                                @elseif($inscrito->escolaridade == 3) <!-- SUPERIOR -->
                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 01: </label>
                                @if(!empty($inscrito->anexoespe1))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe1)}}" target="_blank">Anexo de
                                            Experiência na Função 01</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="40"
                                                   value="{{$pontuacao->ponc_espe1}}" step="10" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="40"
                                                   value="0" step="10" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe1" id="pontuacaoExpe1" min="0" max="40"
                                               value="0" disabled="disabled" step="10">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 02: </label>
                                @if(!empty($inscrito->anexoespe2))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe2)}}" target="_blank">Anexo de
                                            Experiência na Função 02</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe2" id="pontuacaoExpe2" min="0" max="40"
                                                   value="{{$pontuacao->ponc_espe2}}" step="10" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe2" id="pontuacaoExpe2" min="0" max="40"
                                                   value="0" step="10" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe2" id="pontuacaoExpe2" min="0" max="40"
                                               value="0" disabled="disabled" step="10">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 03: </label>
                                @if(!empty($inscrito->anexoespe3))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe3)}}" target="_blank">Anexo de
                                            Experiência na Função 03</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0" max="40"
                                                   value="{{$pontuacao->ponc_espe3}}" step="10" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0" max="40"
                                                   value="0" step="10" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe3" id="pontuacaoExpe3" min="0" max="40"
                                               value="0" disabled="disabled">
                                    </div>
                                @endif

                                <label for="anexoexperiencia" class="col-md-4 col-form-label text-md-right">Experiência
                                    na
                                    Função 04: </label>
                                @if(!empty($inscrito->anexoespe4))
                                    <div class="col-md-4">
                                        <a href="{{url('/storage/'.$inscrito->anexoespe4)}}" target="_blank">Anexo de
                                            Experiência na Função 04</a>
                                    </div>
                                    @if(!empty($pontuacao))
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="40"
                                                   value="{{$pontuacao->ponc_espe4}}" step="10" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="col-md-4 alinha">
                                            <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="40"
                                                   value="0" step="10" disabled="disabled">
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-4">
                                        <label>Não possui</label>
                                    </div>
                                    <div class="col-md-4 alinha">
                                        <input type="number" name="ax_espe4" id="pontuacaoExpe4" min="0" max="40"
                                               value="0" disabled="disabled">
                                    </div>
                                @endif
                                <div class="col-md-10 alinha">

                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- INPUT INVISIVEL PARA ENVIAR A ESCOLARIDADE -->
                    <input type="number" name="escolaridade" value="{{$inscrito->escolaridade}}" hidden="hidden">
                    <input type="number" name="form_id" value="{{$inscrito->id}}" hidden="hidden">
                    <div class="row justify-content-center" style="margin-top: 2%">

                        @if (!empty($pontuacao))
                            <div class="col-md-3 justify-content-center">
                                <input type="submit" value="Aprovar" id="btnAprovar" onmouseover="validarForm(1)"
                                       class="btn btn-success">
                            </div>
                        @endif
                        @if (empty($pontuacao))
                            <div class="col-md-3">
                                <input type="submit" value="Reprovar" id="btnReprovado" onmouseover="validarForm(2)"
                                       class="btn btn-danger">
                            </div>
                        @endif
                        <div class="col-md-3 justify-content-center">
                            <div class="col-md-3 justify-content-center">
                                <input type="submit" value="Revisar Novamente" id="btnRevisar"
                                       onmouseover="validarForm(3)" class="btn btn-warning">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="fixar">

                <div class="card">
                    @if(!empty($pontuacao))
                        <div class="fundDif card-header font-weight-bold">Status: Deferido</div>
                    @else
                        <div class="fundInd card-header font-weight-bold">Status: Indeferido</div>
                @endif

                <!-- corpo de avaliação -->
                    <div class="card-body ">
                        <!--  click titulo graduação -->
                        <!-- Utilizar sempre mesmas classe para titulo -->
                        <!-- sempre mudar o parametro de MOSTRAR(colocar o ID da div ) -->
                        @if (!empty($pontuacao))
                            <div class=" fundoPontu card-header font-weight-bold">
                                Pontuação Geral: {{$pontuacao->ponc_graduacao + $pontuacao->ponc_doutorado + $pontuacao->ponc_mestrado
                                                    + $pontuacao->ponc_posgraduacao1 + $pontuacao->ponc_posgraduacao2 + $pontuacao->ponc_qualific1 +
                                                    $pontuacao->ponc_qualific2 + $pontuacao->ponc_qualific3 + $pontuacao->ponc_qualific4 + $pontuacao->ponc_qualific5 +
                                                    $pontuacao->ponc_espe1 + $pontuacao->ponc_espe2 + $pontuacao->ponc_espe3 + $pontuacao->ponc_espe4}}
                                <label id="pontuacaoGeral"></label>
                            </div>
                        @else
                            <div class="fundoPontu card-header font-weight-bold">
                                Motivo do Indeferimento: <textarea class="form-control" rows="3"
                                                                   disabled="disabled">{{$inscrito->descricaoIndeferido}}</textarea>
                            </div>
                    @endif
                    <!-- fim  conteudo mostrado graduação-->
                    </div>
                    <!-- fim corpo de avaliação -->
                </div>
            </div>
        </div>
    </div>
@endsection
