@extends('layouts.layer')

@section('content')

    <script src="{{ asset('js/form.js') }}"></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header fundo font-weight-bold">Comprovante de Inscrição</div>

                    <div class="card-body">
                        {{$message}}. Protocolo
                        <span class="text-primary">
                        #{{$protocolo}}.
                    </span>
                    <br>
                    <a href="{{ route('comprovante.index') }}"> Imprimir comprovante </a>
                        <br> <br> <br>
                        <p class="aviso">ATENÇÃO:Por favor guarde este protocolo. Este protocolo corresponde ao seu número de inscrição, que deverá ser inserido no preenchimento dos demais documentos/anexos, para os quais seja solicitado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
