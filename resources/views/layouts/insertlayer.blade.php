<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SEMSA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/icon type">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/insert.css') }}" rel="stylesheet">
    <!-- Styles  do button avaliar-->
    <style type="text/css">

        .hiden {
            display: none;
        }


        .me {
            display: block;
        }


    </style>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light fundo shadow-sm">
        <div class="container">
            <a class="navbar-brand btn btn-outline-dark" href="{{ url('/') }}">
                voltar
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))

                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>


<script type="text/javascript">


    function mostrar(id) {
        if (document.getElementById(id).style.display == 'none') {
            document.getElementById(id).style.display = 'block';
        } else {
            document.getElementById(id).style.display = 'none'
        }


    }

    //VARIAVEL PARA LIBERAR O RESTANTE DA AVALIAÇÃO
    var avaliar = 0;

    //Validar se todos os documentos estao corretos para poder serguir o progresso
    function validarDoc(id) {
        if (id == 1) {
            document.getElementById('anexoForm').style.display = 'block';
            document.getElementById('anexoQual').style.display = 'block';
            document.getElementById('anexoExp').style.display = 'block';


            //O botao de reprovado some
            document.getElementById('btnReprovado').style.display = 'none';
            document.getElementById('txtMotivoDoc').style.display = 'none';

            document.getElementById('btnAvaliar').style.display = 'block';
            //ALTERAR O ACTION DO FORM
            document.getElementById('formAction').action = "{{route('ponctuation.store')}}";
            avaliar = 1;
        } else if (id == 0) {
            document.getElementById('anexoForm').style.display = 'none';
            document.getElementById('anexoQual').style.display = 'none';
            document.getElementById('anexoExp').style.display = 'none';
            document.getElementById('txtMotivoDoc').style.display = 'block';

            ///document.getElementById('ax_conselho').value = 0;

            //O botao de reprovado aparece
            document.getElementById('btnReprovado').style.display = 'block';
            document.getElementById('btnAvaliar').style.display = 'none';
            //ALTERAR O ACTION DO FORMULARIO
            document.getElementById('formAction').action = "{{route('ponctuation.indeferido')}}";
            avaliar = 0;
        }
        if (id == 2) {
            document.getElementById('ax_laudo').value = 1;

            //O botao de reprovado some
            document.getElementById('btnIndeferirLaudo').style.display = 'none';
            document.getElementById('txtMotivoPne').style.display = 'none';

            document.getElementById('btnAvaliar').style.display = 'block';
            //ALTERAR O ACTION DO FORMULARIO
            document.getElementById('formAction').action = "{{route('ponctuation.store')}}";
        }
        else if (id == 3) {
            document.getElementById('ax_laudo').value = 0;

            //O botao de reprovado aparece
            document.getElementById('btnIndeferirLaudo').style.display = 'block';
            document.getElementById('txtMotivoPne').style.display = 'block';
            document.getElementById('btnAvaliar').style.display = 'none';

            //ALTERAR O ACTION DO FORMULARIO
            document.getElementById('formAction').action = "{{route('ponctuation.indeferido')}}";
        }
    }

    //VARIAVEIS PARA CUIDAR DA PONTUACAO
    var pontuacaoFormacao = 0;
    var pontuacaoDout = 0;
    var pontuacaoMest = 0;
    var pontuacaoEsp1 = 0;
    var pontuacaoEsp2 = 0;
    var pontuacaoQualificacao = 0;
    var pontuacaoExperiencia = 0;

    //Fundamental e Medio
    function pontuarFundMedio(valor) {
        var pontuacao = 0;
        //Formação Acadêmica
        if (valor == 1) {
            if (document.getElementById('anexoGradu').checked) {
                pontuacaoFormacao = 20;
            }
            else {
                pontuacaoFormacao = 0;
            }
        }
        //ANEXOS DE QUALIFICAO
        if (valor == 2) {
            if (document.getElementById('pontuacaoQuali1').value >= 0) {
                pontuacaoQualificacao = parseFloat(document.getElementById('pontuacaoQuali1').value);
            }
            if (document.getElementById('pontuacaoQuali2').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali2').value);
            }
            if (document.getElementById('pontuacaoQuali3').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali3').value);
            }
            if (document.getElementById('pontuacaoQuali4').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali4').value);
            }
            if (document.getElementById('pontuacaoQuali5').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali5').value);
            }
        }
        //Anexos Experiência na Função
        if (valor == 3) {
            if (document.getElementById('pontuacaoExpe1').value >= 0) {
                pontuacaoExperiencia = parseFloat(document.getElementById('pontuacaoExpe1').value);
            }
            if (document.getElementById('pontuacaoExpe2').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe2').value);
            }
            if (document.getElementById('pontuacaoExpe3').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe3').value);
            }
            if (document.getElementById('pontuacaoExpe4').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe4').value);
            }
            console.log(pontuacao)
        }

        if (Number.isNaN(pontuacao)) {
            document.getElementById('pontuacaoGeral').innerText = 0;
        } else {
            pontuacao = pontuacaoFormacao + pontuacaoQualificacao + pontuacaoExperiencia;
            document.getElementById('pontuacaoGeral').innerText = pontuacao;
        }
        console.log(pontuacao)
    }

    //Superior
    function pontuarSup(valor) {
        //FORMACAO ACADEMICA
        var pontuacao = 0;
        if(valor == 1){
            if (document.getElementById('anexoDout').checked) {
                pontuacaoDout = 15;
            } else {
                pontuacaoDout = 0;
                console.log('caiu')
            }
            if (document.getElementById('anexoMestP').checked) {
                pontuacaoMest = 10;
            } else {
                pontuacaoMest = 0;
            }
            if (document.getElementById('anexoEsp1').checked) {
                pontuacaoEsp1 = 7.5;
            } else {
                pontuacaoEsp1 = 0;
            }
            if (document.getElementById('anexoEsp2').checked) {
                pontuacaoEsp2 = 7.5;
            } else {
                pontuacaoEsp2 = 0
            }
        }

        //ANEXOS DE QUALIFICAO
        if (valor == 2) {
            if (document.getElementById('pontuacaoQuali1').value >= 0) {
                pontuacaoQualificacao = parseFloat(document.getElementById('pontuacaoQuali1').value);
            }
            if (document.getElementById('pontuacaoQuali2').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali2').value);
            }
            if (document.getElementById('pontuacaoQuali3').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali3').value);
            }
            if (document.getElementById('pontuacaoQuali4').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali4').value);
            }
            if (document.getElementById('pontuacaoQuali5').value >= 0) {
                pontuacaoQualificacao += parseFloat(document.getElementById('pontuacaoQuali5').value);
            }
        }
        //Anexos Experiência na Função
        if (valor == 3) {
            if (document.getElementById('pontuacaoExpe1').value >= 0) {
                pontuacaoExperiencia = parseFloat(document.getElementById('pontuacaoExpe1').value);
            }
            if (document.getElementById('pontuacaoExpe2').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe2').value);
            }
            if (document.getElementById('pontuacaoExpe3').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe3').value);
            }
            if (document.getElementById('pontuacaoExpe4').value >= 0) {
                pontuacaoExperiencia += parseFloat(document.getElementById('pontuacaoExpe4').value);
            }

        }

        if (Number.isNaN(pontuacao)) {
            document.getElementById('pontuacaoGeral').innerText = 0;
        } else {
            pontuacao = pontuacaoDout + pontuacaoMest + pontuacaoEsp1 + pontuacaoEsp2 + pontuacaoQualificacao + pontuacaoExperiencia;
            document.getElementById('pontuacaoGeral').innerText = pontuacao;
        }

        console.log(pontuacao)
    }

    function validarForm(id) {
        if (id == 1){
            document.getElementById('formAction').action = "{{route('revisao.aprovado')}}";
        }
        else if (id == 2) {
            document.getElementById('formAction').action = "{{route('revisao.reprovado')}}";
        }
        else if (id == 3){
            document.getElementById('formAction').action = "{{route('revisao.avaliarNovamente')}}";
        }
    }
    function validarFormRecurso(id, escolaridade){
        //recurso
        if(id == 4){
            document.getElementById('recursoEnviar').style.display = 'flex';
            document.getElementById('btnEnviar').className = 'btn btn-success';
            if (escolaridade != 3) {
                document.getElementById('anexoGradu').disabled = false;
            }
            document.getElementById('pontuacaoQuali1').disabled = false;
            document.getElementById('pontuacaoQuali1').disabled = false;
            document.getElementById('pontuacaoQuali2').disabled = false;
            document.getElementById('pontuacaoQuali3').disabled = false;
            document.getElementById('pontuacaoQuali4').disabled = false;
            document.getElementById('pontuacaoQuali5').disabled = false;
            document.getElementById('pontuacaoExpe1').disabled = false;
            document.getElementById('pontuacaoExpe2').disabled = false;
            document.getElementById('pontuacaoExpe3').disabled = false;
            document.getElementById('pontuacaoExpe4').disabled = false;
            if (escolaridade == '3') {
                document.getElementById('anexoDout').disabled = false;
                document.getElementById('anexoMestP').disabled = false;
                document.getElementById('anexoEsp1').disabled = false;
                document.getElementById('anexoEsp2').disabled = false;
            }
            document.getElementById('formAction').action = "{{route('recurso.avaliar', 1)}}";
        }
        else if(id == 5){
            document.getElementById('recursoEnviar').style.display = 'flex';
            document.getElementById('btnEnviar').className = 'btn btn-danger';
            if (escolaridade != 3) {
                document.getElementById('anexoGradu').disabled = true;
            }
            document.getElementById('pontuacaoQuali1').disabled = true;
            document.getElementById('pontuacaoQuali1').disabled = true;
            document.getElementById('pontuacaoQuali2').disabled = true;
            document.getElementById('pontuacaoQuali3').disabled = true;
            document.getElementById('pontuacaoQuali4').disabled = true;
            document.getElementById('pontuacaoQuali5').disabled = true;
            document.getElementById('pontuacaoExpe1').disabled = true;
            document.getElementById('pontuacaoExpe2').disabled = true;
            document.getElementById('pontuacaoExpe3').disabled = true;
            document.getElementById('pontuacaoExpe4').disabled = true;
            if (escolaridade == '3') {
                document.getElementById('anexoDout').disabled = true;
                document.getElementById('anexoMestP').disabled = true;
                document.getElementById('anexoEsp1').disabled = true;
                document.getElementById('anexoEsp2').disabled = true;
            }
            <!-- 2 seria negado -->
            document.getElementById('formAction').action = "{{route('recurso.avaliar', 2)}}";
        }
    }
</script>

<script>
    $(document).ready(function () {
        $("body").on('change', "#vagas_deficiencia", function () {
            var $this = $(this);
            if ($this.val() == 1) {
                $("body").find('.divTipoDeficiencia').removeAttr('hidden');
            } else {
                $("body").find('.divTipoDeficiencia').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 1) {
                $("body").find('.divCargos1').removeAttr('hidden');
            } else {
                $("body").find('.divCargos1').attr('hidden', 'true');
            }

            if ($this.val() == 2) {
                $("body").find('.divCargos2').removeAttr('hidden');
            } else {
                $("body").find('.divCargos2').attr('hidden', 'true');
            }

            if ($this.val() == 3) {
                $("body").find('.divCargos3').removeAttr('hidden');
            } else {
                $("body").find('.divCargos3').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 2) {
                $("body").find('.divGraduacao').removeAttr('hidden');
            } else {
                $("body").find('.divGraduacao').attr('hidden', 'true');
            }
        });
    });


    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 3) {
                $("body").find('.divGraduacao3').removeAttr('hidden');
            } else {
                $("body").find('.divGraduacao3').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 1 || $this.val() == 2) {
                $("body").find('.divEnsFundamentalMedio').removeAttr('hidden');
            } else {
                $("body").find('.divEnsFundamentalMedio').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 1) {
                $("body").find('.divFundamental').removeAttr('hidden');
            } else {
                $("body").find('.divFundamental').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 2) {
                $("body").find('.divMedio').removeAttr('hidden');
            } else {
                $("body").find('.divMedio').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#cargo", function () {
            var $this = $(this);

            if ($this.val() == 3 || $this.val() == 4) {
                $("body").find('.divConselho').removeAttr('hidden');
            } else {
                $("body").find('.divConselho').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#vagas_deficiencia", function () {
            var $this = $(this);

            if ($this.val() == 1) {
                $("body").find('.divLaudo').removeAttr('hidden');
            } else {
                $("body").find('.divLaudo').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#cargo", function () {
            var $this = $(this);

            if ($this.val() == 2 || $this.val() == 4 || $this.val() == 5) {
                $("body").find('.divPne').removeAttr('hidden');
            } else {
                $("body").find('.divPne').attr('hidden', 'true');
            }
        });
    });

</script>

<footer class="content">

    <div class="rodape">
        <p>

            2020 © Prefeitura Municipal de Rio Branco</p>

        <p>Rua Rui Barbosa, 285 - Centro - Rio Branco/AC - CEP: 69.900-901</p>

        <p>Horário de Atendimento: 08h às 17h

         <p> EM CASO DE DUVIDAS LIGUE:32132516-SEMSA</p>
    </div>
    <div class="copy">
        <p class="font-weight-bold font-italic"> Processo seletivo 2020 </p>
    </div>
</footer>
</body>
</html>

