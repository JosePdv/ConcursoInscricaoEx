@extends('layouts.lista')

@section('content')
<div class="container">
        <div class="row justify-content-center">
         <div class="col-10">
            <div class="card">

                <div class="card-body ">
                    <div class="card-title">Lista de Inscritos</div>
                    <hr>
                    <div class="table-responsive  ">
                        <table class="table " id="table-id">
                            <thead>
                            <tr>
                                <th>CARGO</th>
                                <th>NOME</th>
                                <th>CPF</th>
                                <th>AVALIADO</th>
                                <th>STATUS (aprovado)</th>
                                <th>AÇÕES</th>
                                <th>Visualização</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($formularios as $formulario)
                                <tr>
                                    @if ($formulario->cargo == 0)
                                        <td>Cargo não selecionado</td>
                                    @elseif ($formulario->cargo == 1)
                                        <td>Técnico de Laborátorio</td>

                                    @elseif ($formulario->cargo == 2)
                                        <td>Agente de Vigilância em Saúde</td>

                                    @elseif ($formulario->cargo == 3)
                                        <td>Auxiliar de Fármacia</td>

                                    @elseif ($formulario->cargo == 4)
                                        <td>Educador Social</td>

                                    @elseif ($formulario->cargo == 5)
                                        <td>Médico Clínico Geral</td>

                                    @elseif ($formulario->cargo == 6)
                                        <td>Enfermeiro</td>

                                    @elseif ($formulario->cargo == 7)
                                        <td>Psicólogo</td>

                                    @elseif ($formulario->cargo == 8)
                                        <td>Nutrícionista</td>

                                    @elseif ($formulario->cargo == 9)
                                        <td>Farmacêutico</td>

                                    @elseif ($formulario->cargo == 10)
                                        <td>Cirugião Dentista</td>

                                    @endif

                                    <td>{{ $formulario->nome }}</td>
                                    <td>{{ $formulario->cpf }}</td>
                                    @if($formulario->avaliado == true)
                                        <td style="color: green;">Sim</td>
                                    @else
                                        <td style="color: red;">Não</td>
                                    @endif
                                    @if($formulario->aprovado == '1')
                                        <td style="color: green;"> Sim</td>
                                    @elseif($formulario->aprovado == '2')
                                        <td style="color: red;">Reprovado</td>
                                    @else
                                        <td>Não</td>
                                    @endif

                                    <td>
                                        @if ($formulario->aprovado != '2' && $formulario->avaliado != '1')
                                        <a class="btn btn-dark"
                                           href="{{route('ponctuation.insert', $formulario->id)}}">
                                            <i class="mdi mdi-account-edit"></i>
                                            Avaliar
                                        </a>
                                        @endif
                                    </td>

                                    <td>
                                       
                                        <a class="btn btn-dark"
                                           href="{{route('ponctuation.insertVI', $formulario->id)}}">
                                            <i class="mdi mdi-account-edit"></i>
                                            Visualizar
                                        </a>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Nenhum Resultado Encontrado</td>
                                </tr>
                            @endforelse
                            <tbody>
                        </table>
                    </div>
                </div>
                {!! $formularios ->links() !!}
            </div>
        </div>
    </div>
</div>
</div>
@stop

