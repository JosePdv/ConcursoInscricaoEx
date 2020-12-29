<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SEMSA</title>

    <!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/insert.css') }}" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/icon type">
</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light fundo shadow-sm">

        <div class="container ">
            <div class=" col col-dm-12 text-center">
                <a style="color: black;" href="{{ url('/') }}">

                    <h3>Secretaria Municipal de Saúde</h3>
                </a>
                <p>Processo Seletivo Simplificado para Contratação e Servidores Temporários - Edital 01/2020</p>
                <p>Anexo II - Formulário de Inscrição</p>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
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

            if ($this.val() == 5 || $this.val() == 6 || $this.val() == 7 || $this.val() == 8 || $this.val() == 9 || $this.val() == 10 || $this.val() == 1) {
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

            if ($this.val() != 10  ) {
                $("body").find('.divPne').removeAttr('hidden');
            } else {
                $("body").find('.divPne').attr('hidden', 'true');
            }
        });
    });

    $(document).ready(function () {
        $("body").on('change', "#iescolaridade", function () {
            var $this = $(this);

            if ($this.val() == 1 || $this.val() == 2 || $this.val() == 3) {
                $("body").find('.divanexosFormacao').removeAttr('hidden');
            } else {
                $("body").find('.divanexosFormacao').attr('hidden', 'true');
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

       

        <p>Email: comissao.semsa2020@riobranco.ac.gov.br</p>


    </div>
    <div class="copy">
        <p class="font-weight-bold font-italic"> Processo seletivo 2020 </p>
    </div>
</footer>
</body>

</html>
