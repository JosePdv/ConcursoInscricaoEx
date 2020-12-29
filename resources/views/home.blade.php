@extends('layouts.layercp')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="card">
                    <div class="card-header fundo ">ATIVIDADES</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col">
                        <!-- @if(\Illuminate\Support\Facades\Auth::user()->revisor == 0 || \Illuminate\Support\Facades\Auth::user()->master == 1)!-->
                            <a class="nav-item nav-link active" style="margin-right: 2%"
                               href="{{route('formulario.lista')}}">LISTA DE INSCRITOS</a>
                        <!--   @endif!-->
                        </div>
                        <div class="col">
                        <!-- @if(\Illuminate\Support\Facades\Auth::user()->revisor == 1 || \Illuminate\Support\Facades\Auth::user()->master == 1)-->
                            <a class="nav-item nav-link active"
                               href="{{route('formulario.listaRevisao')}}">LISTA DE REVISOR</a>
                            <!--  @endif-->
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                        <!-- @if(\Illuminate\Support\Facades\Auth::user()->revisor == 1 || \Illuminate\Support\Facades\Auth::user()->master == 1)-->
                            <a class="nav-item nav-link active" style="margin-right: 2%" href="pdf/index.php">LISTA DOS
                                DEFERIDOS E INDEFERIDOS</a>
                        <!--  @endif -->
                        </div>
                        <div class="col">
                            @if(\Illuminate\Support\Facades\Auth::user()->revisor == 1 || \Illuminate\Support\Facades\Auth::user()->master == 1)

                                <p><a class="nav-item nav-link active" style="margin-bottom: 2%"
                                      href="{{route('recurso.lista')}}">LISTA DE RECURSO</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
