@extends('diseños.diseñoturnos')
@section('diseñomenus')
<br>
<h1 style="text-align: center; color:white; background-color:rgb(113, 113, 255)">Lista de hojas de chequeo turno 1</h1>
<table class="table table-success table-striped mt-4">
@role('Admin')
<form action="{{route('borrarTodo.destroy')}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar Todo</button
    </form>
@endrole
</table>

@endsection