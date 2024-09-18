<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Identificación y Codificación Docente y Unidad Curricular</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    width: 95%;
}
.banner_institucional{
    width: 100%;
}

.container {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #000;
}

h1 {
    font-size: 16px;
    text-align: center;
    margin: 20px 0;
}
table {
            border-collapse: collapse;
            width: 100%;
        }

        .contenido{
        border-left: 1px solid black;
        border-top: none;
        border-right: 1px solid black;
        border-bottom:  1px solid black; 
        font-weight: 100;
        text-align: left;
        height: 30px;
        }
        .titulo{
        border-left: 1px solid black;
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-bottom: none;
        text-align: left;
        }
        .dias{
            border-left: 1px solid black;
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        font-weight: 100;
        }
        .tituloD{
            border-left: 1px solid black;
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        text-align: center;
        }
        
</style>
<body>
@php
            $data = json_decode($jsonData, true);
            @endphp
            @foreach($data as $item)
    <div class="container">
        <header>
        <img src="../resources/views/cintillo.jpg" alt="Banner institucional" class="banner_institucional">
        </header>
        <h1>REGISTRO DE IDENTIFICACIÓN Y CODIFICACION DOCENTE Y UNIDAD CURRICULAR</h1>
        <table>
            <tr>
                <th class="titulo" colspan="3" >DENOMINACION DEL AREA</th>
                <th class="titulo" colspan="2">LAPSO</th>
            </tr>
            <tr>
            <td class="contenido" colspan="3">{{ $cellI5 }}</td>
            <td class="contenido" colspan="2">{{ $cellI6 }}</td>
            </tr>
            <tr>
                <th class="titulo" colspan="3" >SEMESTRE</th>
                <th class="titulo" colspan="2">SECCION</th>
            </tr>
            <tr>
                <td class="contenido" colspan="3">{{ $item['columna_3'] }}</td>
                <td class="contenido" colspan="2">{{ $item['columna_4'] }}</td>
            </tr>
<tr><th style="height: 15px;"></th></tr>
            <tr>
                <th class="titulo" colspan="5" >NOMBRE DE LA UNIDAD CURRICULAR</th>
            </tr>
            <tr>
                <td class="contenido" colspan="5">{{ $item['columna_2'] }} </td>
            </tr>
            <tr>
                <th class="titulo" colspan="3" >NOMBRE DOCENTE</th>
                <th class="titulo" colspan="2">CEDULA</th>
            </tr>
            <tr>
                <td class="contenido" colspan="3">{{ $item['columna_6'] }} {{ $item['columna_5'] }}</td>
                <td class="contenido" colspan="2">{{ $item['columna_7'] }}</td>
            </tr>
            <tr><th style="height: 15px;"></th></tr>
            <tr>
                <th class="tituloD" colspan="2" >DIA</th>
                <th class="tituloD" colspan="1">DESDE - HASTA</th>
                <th class="tituloD" colspan="2">AULA</th>
            </tr>
            <tr >
                <td class="dias" colspan="2" >{{ $item['columna_10'] }}</td>
                <td class="dias" colspan="1">{{ $item['columna_11'] }}</td>
                <th class="dias" colspan="2">{{ $item['columna_8'] }}</th>
            </tr>
            <tr >
                <td class="dias" colspan="2" >{{ $item['columna_12'] }}</td>
                <td class="dias" colspan="1">{{ $item['columna_13'] }}</td>
                <th class="dias" colspan="2">{{ $item['columna_9'] }}</th>
            </tr>
        </table>
    </div>


    <br>
    <br>
    <br>
    @endforeach
</body>
</html>
