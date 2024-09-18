<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Etiquetas programacion</title>
</head>
<body>
    <header>
        <img src="{{asset('cintillo.png')}}" alt="">
    </header>
    <div class="content">
    <h1>Programa de automatizacion de creacion de etiquetas</h1>
    <p>Debe de seleccionar el archivo de excel con la programacion academica y el sistema le generará las etiquetas correspondientes</p>
    <form action="{{ route('import.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="campos archivo">
        <label for="file">Selecciona un archivo Excel:</label>

        <input type="file" name="file" required>

        </div>
        <div class="botonera">
        <button type="submit">Generar etiquetas</button>
        </div>
    </form>
    </div>
</body>
</html>
