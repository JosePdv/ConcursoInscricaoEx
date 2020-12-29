<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">


    <title>SEMSA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light  shadow-sm cab">
        <div class="align-content-left">
            <a href="http://www.riobranco.ac.gov.br/">
                <img style="width: 3em;" src="img/logo-2.png">
            </a>

        </div>


        <div class="top-right links">

            <a href="{{ route('login') }} ">
                <button class="btn btn-outline-dark"> Acesso Restrito</button>
            </a>
        </div>
    </nav>
</header>
<div class=" container-fluid">
    <div class="flex-center position-ref full-height container ">
        <div class="content">
            <img style="width: 29em;" src="img/logo-1.png">
            <div class="texto col-sm-8">
                <h3>
                    Secretaria Municipal de Saúde
                </h3>
                <p>PROCESSO SELETIVO SIMPLIFICADO PARA SELEÇÃO E CONTRATAÇÃO POR TEMPO DETERMINADO PARA ATUAÇÃO NA
                    ATENÇÃO
                    PRIMÁRIA DO MUNICÍPIO DE RIO BRANCO - EDITAL N°01/2020</p>
                <h1>PERIODO DE RECURSOS ENCERRADO!</h1>
                {{--   <h1> INSCRIÇÕES ENCERRADAS !</h1>--}}
            </div>
            <div class="title m-b-md container">


                {{--                <a href="{{route('inscricao')}}" ><img style="width: 9em;" src="img/banner3.jpeg"></a><br>--}}

                {{--  <a href="{{route('comprovante.index')}} " ><img style="width: 9em;" src="img/banner2.jpeg"></a>--}}
                <a href=""><img style="width: 9em;" src="img/banner3.jpeg"></a><br>
                <p></p>
                <a href=""><img style="width: 9em;" src="img/banner2.jpeg"></a>
                <p></p>
                {{--   <a href=" {{route('recurso')}}"><img style="width: 9em;" src="img/recurso.jpeg"></a>--}}
                <a href=""><img style="width: 9em;" src="img/recurso.jpeg"></a>

            </div>
            <div class="list-group" style="size: 20px">
                <a class="list-group-item list-group-item-warning">
                    Download Edital Concurso ABAIXO !
                </a>
                <a href="files/PMRB-XX-EDITAL SEMSA - PROCESSO SELETIVO.pdf"
                   class="list-group-item list-group-item-action" target="_blank">EDITAL CONCURSO SEMSA </a>
                <a href="files/SEMSA RESULTADO PRELIMINAR.pdf" class="list-group-item list-group-item-action"
                   target="_blank">RESULTADO PRELIMINAR </a>
                <a href="files/SEMSA RESULTADO FINAL.pdf" class="list-group-item list-group-item-action"
                   target="_blank">RESULTADO FINAL</a>
                <a href="files/CONVOCACAO.pdf" class="list-group-item list-group-item-action"
                   target="_blank">1ª CONVOCAÇÃO</a>
                <a href="files/CONVOCACAO2.pdf" class="list-group-item list-group-item-action"
                   target="_blank">2ª CONVOCAÇÃO</a>
                <a href="files/CONVOCACAO3.pdf" class="list-group-item list-group-item-action"
                   target="_blank">3ª CONVOCAÇÃO</a>
                <a href="files/CONVOCACAO4.pdf" class="list-group-item list-group-item-action"
                   target="_blank">4ª CONVOCAÇÃO</a>
                <a href="files/CONVOCACAO5.pdf" class="list-group-item list-group-item-action"
                   target="_blank">5ª CONVOCAÇÃO</a>
                <a href="files/CONVOCACAO 6.pdf" class="list-group-item list-group-item-action"
                   target="_blank">6ª CONVOCAÇÃO <img src="img/new.png"></a>
                <a href="files/resultadosubjuic.pdf" class="list-group-item list-group-item-action"
                   target="_blank"> Resultado Preliminar Cargo Cirurgião Dentista(sub judice)</a>
            </div>
        </div>
    </div>
</div>

<footer class="content">
    <div class="rodape">
        <p>

            2020 © Prefeitura Municipal de Rio Branco</p>

        <p>Rua Rui Barbosa, 285 - Centro - Rio Branco/AC - CEP: 69.900-901</p>

        <p>Horário de Atendimento: 08h às 17h</p>

        <p> EM CASO DE DUVIDAS LIGUE:32132516-SEMSA</p>


        <p>Email: comissao.semsa2020@riobranco.ac.gov.br</p>

    </div>
    <div class="copy">
        <p class="font-weight-bold font-italic"> Processo seletivo 2020 </p>
    </div>
</footer>


</body>
</html>
