@extends('layouts.comprovante')

@section('content')

    <script src="{{ asset('js/form.js') }}"></script>

    <form method="GET" action="{{route('comprovante.pesquisa')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header fundo font-weight-bold">Imprimir comprovante</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF: </label>

                                <div class="col-md-4">
                                    <input id="cpf" type="text" class="cpf form-control @error('cpf') is-invalid @enderror"
                                           name="cpf" value="{{ old('cpf') }}" autocomplete="cpf" autofocus>

                                    @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Enviar Dados') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
