@extends('diseños.diseñoturnos')
@section('diseñomenus')
<br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">Lista de hojas de chequeo turno 1</h1>
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
        @foreach ($turno57s as $turno57)
        <tr>
            <td>{{$turno57->DocumentoID}}</td>
            <td>{{$turno57->Titulo}}</td>
            <td>{{$turno57->Descripcion}}</td>
            <td>{{$turno57->Operacion}}</td>
            <td>{{$turno57->Numero}}</td>
            <td>
                <form action="{{route('Turno1.destroy',$turno57->id)}}" method="POST">
                @role('Admin')
                <a href="Turno1/{{$turno57->id}}/edit" style="color: white" class="btn btn-info">Editar</a>
                @endrole
                @csrf
                @method('DELETE')
                <a href="{{$turno57->Ruta}}" class="btn btn-success">Mostrar</a>
                @role('Admin')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                @endrole
                </form>         
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>
@role('Admin')
<form action="{{ route('borrar-registros') }}" method="POST">
    @csrf
    <a href="Turno1/create" class="btn btn-primary">Crear</a>
    <button type="submit" class="btn btn-danger">Borrar todos los registros</button>
</form>

@endrole
@endsection