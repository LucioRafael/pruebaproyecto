@extends('diseños.diseñoturnos')
@section('diseñomenus')
<br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">Lista de hojas de chequeo turno 3</h1>
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
        @foreach ($turno3s as $turno3)
        <tr>
            <td>{{$turno3->DocumentoID}}</td>
            <td>{{$turno3->Titulo}}</td>
            <td>{{$turno3->Descripcion}}</td>
            <td>{{$turno3->Operacion}}</td>
            <td>{{$turno3->Numero}}</td>
            <td>
                <form action="{{route('Turno3.destroy',$turno3->id)}}" method="POST" style="zoom: 1.2">
                @role('Admin')
                <a href="Turno3/{{$turno3->id}}/edit" style="color: white" class="btn btn-info" style="zoom: 1.2">Editar</a>
                @endrole
                @csrf
                @method('DELETE')
                <a href="{{$turno3->Ruta}}" class="btn btn-success" style="zoom: 1.2">Mostrar</a>
                @role('Admin')
                <button type="submit" class="btn btn-danger" style="zoom: 1.2">Eliminar</button>
                @endrole
                </form>         
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>
@role('Admin')
<a href="Turno3/create" class="btn btn-primary">Crear</a>
@endrole
@endsection