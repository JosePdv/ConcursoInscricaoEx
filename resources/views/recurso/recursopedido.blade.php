@extends('layouts.comprovante')

@section('content')
    <script src="{{ asset('js/form.js') }}"></script>

    <form method="POST" action="{{route('recurso.enviar', $formulario->id)}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header fundo font-weight-bold">Pedido de Recurso</div>

                        <div class="card-body">

                            <div class="form-group row">
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">Recurso: </label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="recurso" id="exampleFormControlTextarea1" rows="10" maxlength="499"required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Enviar Recurso') }}
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
