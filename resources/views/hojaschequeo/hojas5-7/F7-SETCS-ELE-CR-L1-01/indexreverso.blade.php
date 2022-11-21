<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body id="vistas">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <img src="/images/R.png" alt="" id="logoborg">
                    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>
                </div>
            </nav>
            <br>
        </div>
        <table class="table table-success table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                    <th scope="col" rowspan="2">Descripcion de la falla</th>
                    <th scope="col" rowspan="2">Se paro el proceso</th>
                    <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                    <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                    <th scope="col" rowspan="2">Causa raiz asignable</th>
                    <th scope="col" rowspan="2">Accion correctiva</th>
                    <th scope="col">Responsable</th>
                </tr>
                <tr>
                    <th scope="col">Muestreo de confirmacion</th>
                    <th scope="col">Disposicion de material construido</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Nombre / firma</th>
                    <th scope="col">Supv. de produccion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reversos as $reverso)
                <tr>
                    <td>{{$reverso->fechahora}}</td>
                    <td>{{$reverso->falla}}</td>
                    <td>{{$reverso->proceso}}</td>
                    <td>{{$reverso->porque}}</td>
                    <td>{{$reverso->confirmacion}}</td>
                    <td>{{$reverso->disposicion}}</td>
                    <td>{{$reverso->cantidad}}</td>
                    <td>{{$reverso->nombre}}</td>
                    <td>
                        <form action="{{route('reverso.destroy',$reverso->id)}}" method="POST">
                        <a href="reverso/{{$reverso->id}}/edit" style="color: white" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>    
                        </form>         
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </body>
</html>