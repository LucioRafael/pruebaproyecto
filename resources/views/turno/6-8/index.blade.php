@extends('diseños.diseñoturnos')
@section('diseñomenus')
<br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">Lista de hojas de chequeo turno 2</h1>
<table class="table table-success table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">DocumentoID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Operacion</th>
            <th scope="col">#</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($turno68s as $turno68)
        <tr>
            <td>{{$turno68->DocumentoID}}</td>
            <td>{{$turno68->Titulo}}</td>
            <td>{{$turno68->Descripcion}}</td>
            <td>{{$turno68->Operacion}}</td>
            <td>{{$turno68->Numero}}</td>
            <td>
                <form action="{{route('Turno2.destroy',$turno68->id)}}" method="POST">
                <a href="Turno2/{{$turno68->id}}/edit" style="color: white" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <a href="{{$turno68->Ruta}}" class="btn btn-success">Mostrar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>    
                </form>         
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>
<a href="Turno2/create" class="btn btn-primary">Crear</a>
@endsection