<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<div>

</div>
    <h1 background-color="green" align="center" >Hoja de chequeo de vestimenta a cuarto limpio</h1>
    <br>
    <div class="table-responsive">
    <table class="table table-success table-bordered">
        <thead>
            @if ($datoshoja->$documentoID == $turno57->$ruta)
            @foreach($datoshojas as $datoshoja)
            <tr>
                <th>titulo</th>
                <th>documentoid</th>
            </tr>
            <tr>
                <th>subtitulo</th>
            </tr>
            <tr>
                <th>No. de cambio</th>
                <th>Fecha</th>
                <th>ME/IE</th>
                <th>T. Hernandez / C. Perez</th>
                <th>Area</th>
                <th>Cuarto Limpio 1</th>
                <th>Lugar</th>
                <th>Torreon</th>
                <th>Pagina</th>
                <th>1 de 1</th>
            </tr>
            <tr>
                <th rowspan="2">108216767</th>
                <th>09-nov-18</th>
                <th>calidad</th>
                <th>R. Avitia. / B. Contreras</th>
                <th>Linea</th>
                <th>1</th>
                <th>Planta</th>
                <th colspan ="3">59</th>
            </tr>
            <tr>
                <th>Rev. 02</th>
                <th>Manufactura</th>
                <th>R. Espinoza / H. Martinez / M. Espino</th>
                <th>Op #</th>
                <th>0</th>
                <th>Depto</th>
                <th>926/967/972/971/959</th>
                <th>No.Parte</th>
                <th>See FM Sheet</th>
            </tr>
            @endforeach                
            @endif
        </thead>
    </table> 
    <table>
    </table>
</body>
</html>