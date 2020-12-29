@extends('layouts.lista')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">

                    <div class="card-body ">
                        <div class="card-title">Lista de Recurso</div>
                        <hr>
                        <div class="table-responsive ">
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
                                       @forelse($recursos as $recurso)

                                <tr>
                                    @if ($recurso->formularios->cargo == 0)
                                        <td>Cargo não selecionado</td>

                                     @elseif ($recurso->formularios->cargo == 1)
                                        <td>Técnico de Laborátorio</td>

                                    @elseif ($recurso->formularios->cargo == 2)
                                        <td>Agente de Vigilância em Saúde</td>

                                    @elseif ($recurso->formularios->cargo == 3)
                                        <td>Auxiliar de Fármacia</td>

                                    @elseif ($recurso->formularios->cargo == 4)
                                        <td>Educador Social</td>

                                   @elseif ($recurso->formularios->cargo == 5)
                                        <td>Médico Clínico Geral</td>

                                    @elseif ($recurso->formularios->cargo == 6)
                                        <td>Enfermeiro</td>

                                   @elseif ($recurso->formularios->cargo == 7)
                                        <td>Psicólogo</td>

                                   @elseif ($recurso->formularios->cargo == 8)
                                        <td>Nutrícionista</td>

                                   @elseif ($recurso->formularios->cargo == 9)
                                        <td>Farmacêutico</td>

                                   @elseif ($recurso->formularios->cargo == 10)
                                        <td>Cirugião Dentista</td>

                                    @endif

                                    <td>{{ $recurso->formularios->nome }}</td>
                                    <td>{{ $recurso->formularios->cpf }}</td>

                                    @if($recurso->formularios->avaliado == true)
                                            <td style="color: green;">Sim</td>
                                        @else
                                            <td style="color: red;">Não</td>
                                        @endif
                                        @if($recurso->formularios->aprovado == '1')
                                            <td style="color: green;"> Sim</td>
                                        @elseif($recurso->formularios->aprovado == '2')
                                            <td style="color: red;">Reprovado</td>
                                        @else
                                            <td>Não</td>
                                        @endif

                                     <td>
                                            @if($recurso->recurso_aceito == '0')
                                                <a class="btn btn-dark"
                                                   href="{{route('recurso.unico', $recurso->id)}}">
                                                    <i class="mdi mdi-account-edit"></i>
                                                    Avaliar
                                                </a>
                                            @elseif($recurso->recurso_aceito == '1')
                                                Recurso Avaliado
                                            @else
                                                Recurso Negado
                                            @endif
                                        </td>

                                         <td>
                                
                                                <a class="btn btn-dark"
                                                   href="{{route('recurso.unicoVI', $recurso->id)}}">
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
                    {!! $recursos->links() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

