<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Comprovante De Inscrição</title>

    <!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/comprovante.css') }}" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light fundo shadow-sm">
        <div class="align-content-left">
            <a href="http://www.riobranco.ac.gov.br/">

            </a>
        </div>
        <div class="container align-content-center ">
            <div class="col col-md-12 text-center">
                <a style="color: black;" href="{{ url('/') }}">
                    <h3>Secretaria Municipal de Saúde</h3>
                </a>
                <p >Processo Seletivo Simplificado para Contratação e Servidores Temporários - Edital 01/2020</p>
                <p>Comprovante de Inscrição</p>
            </div>
        </div>


    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<footer class="content">

    <div class="rodape">
        <p>

           <p>

            2020 © Prefeitura Municipal de Rio Branco</p>

        <p>Rua Rui Barbosa, 285 - Centro - Rio Branco/AC - CEP: 69.900-901</p>

        <p>Horário de Atendimento: 08h às 17h

      <p> EM CASO DE DUVIDAS LIGUE:32132516-SEMSA</p>

       

        <p>Email: comissao.semsa2020@riobranco.ac.gov.br</p>


    </div>
    <div class="copy">
        <p class="font-weight-bold font-italic"> Processo seletivo 2020 </p>
    </div>
</footer>
</body>

</html>
