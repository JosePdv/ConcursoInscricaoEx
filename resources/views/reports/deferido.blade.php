<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        #t01 tr:nth-child(even) {
            background-color: #eee;
        }

        #t01 tr:nth-child(odd) {
            background-color: #fff;
        }

        #t01 th {
            background-color: black;
            color: white;
        }

        alinhar {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Lista De Defiridos</h2>
<h4>A Comissão Organizadora do Processo Seletivo , no uso de suas atribuições legais em conformidade com o Edital 01/2020, torna pública a lista das incrições deferidas e a relação de classificados,
    para que produzam os devidos e legais efeitos, como segue:
</h4>

<table>
    <tr>
        <th>Nome</th>
        <th>Protocolo</th>
        <th>PNE</th>
        <th>NOTA</th>
    </tr>
    @foreach($formulario as $inscrito)
        <tr>
            <td>{{$inscrito->nome}}</td>
            <td>{{$inscrito->protocolo}}</td>
            @if($inscrito->vagas_deficiencia == 0)
                <td>NÃO</td>
            @else
                <td>SIM</td>
            @endif
            <td>{{$inscrito->ponctuation->ponc_graduacao
+ $inscrito->ponctuation->ponc_doutorado
+ $inscrito->ponctuation->ponc_mestrado
  + $inscrito->ponctuation->ponc_posgraduacao1
  + $inscrito->ponctuation->ponc_posgraduacao2
  + $inscrito->ponctuation->ponc_qualific1 +
   $inscrito->ponctuation->ponc_qualific2 +
    $inscrito->ponctuation->ponc_qualific3 +
    $inscrito->ponctuation->ponc_qualific4 +
    $inscrito->ponctuation->ponc_qualific5 +
    $inscrito->ponctuation->ponc_espe1 +
    $inscrito->ponctuation->ponc_espe2 +
    $inscrito->ponctuation->ponc_espe3 +
    $inscrito->ponctuation->ponc_espe4}}</td>
        </tr>
    @endforeach
</table>
<br>
</body>
</html>
