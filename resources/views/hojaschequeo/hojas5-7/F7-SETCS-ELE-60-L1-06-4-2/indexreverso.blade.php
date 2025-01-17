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
                    <div>
                    <a href="F7-SETCS-ELE-60-L1-06-4-2-1" class="btn btn-info" style="color: white">Volver</a>
                    <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                        
                    </div>

                </div>
            </nav>
            @foreach ($datoshojas as $datoshoja)
            @endforeach
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
                    <th scope="col" rowspan="2">Acciones</th>
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
                @if ($reverso->documentoid == "F7-SETCS-ELE-60-L1-06-4-2-1" && $reverso->turno == "1" &&
                $reverso->mes == $datoshoja->mes && 
                $reverso->año == $datoshoja->año)
                <tr>
                    <td>{{$reverso->fechahora}}</td>
                    <td>{{$reverso->falla}}</td>
                    <td>{{$reverso->proceso}}</td>
                    <td>{{$reverso->porque}}</td>
                    <td>{{$reverso->confirmacion}}</td>
                    <td>{{$reverso->dispocision}}</td>
                    <td>{{$reverso->Cantidad}}</td>
                    <td>{{$reverso->nombre}}</td>
                    <td>{{$reverso->causa}}</td>
                    <td>{{$reverso->accion}}</td>
                    <td>{{$reverso->responsable}}</td>
                    <td>
                        <form action="{{route('reversoSETCS606421.destroy',$reverso->id)}}" method="POST">
                        <a href="reversoSETCS606421/{{$reverso->id}}/edit" style="color: white" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>    
                        </form>         
                    </td>
                </tr>                      
                @endif
                @endforeach
            </tbody>
        </table>
        <a href="/reversoSETCS606421/create" class="btn btn-primary">Añadir campo</a>
        @role('Admin')
        <a href="{{route('pdfReversoSETCS606421')}}" class="btn btn-danger">Guardar PDF</a>
        @endrole
    </body>
</html>