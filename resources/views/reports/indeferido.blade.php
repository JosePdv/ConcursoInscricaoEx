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

<h2>Lista De Indeferidos</h2>
<h4>A Comissão Organizadora do Processo Seletivo , no uso de suas atribuições legais em conformidade com o Edital 01/2020, torna pública a lista das incrições indeferidas por não atenderem ao estabelecido no
    referido edital, conforme as funções abaixo:
</h4>

<table>
    <tr>
        <th>Nome</th>
        <th>Protocolo</th>
        <th>Motivo</th>
    </tr>
    @foreach($formulario as $inscrito)
        <tr>
            <td>{{$inscrito->nome}}</td>
            <td>{{$inscrito->protocolo}}</td>
            <td>{{$inscrito->descricaoIndeferido}}</td>
        </tr>
    @endforeach
</table>
<br>
</body>
</html>
