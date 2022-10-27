<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet" >
</head>
<body id="vistas">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<div>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="/images/R.png" alt="" id="logoborg">
      <a href="/logout" class="btn" id="b3">Cerrar sesion</a>
    </div>
  </nav>
  <br>
</div>
    <div class="table-responsive">
    <table class="table table-success table-bordered">
        <thead>
            @foreach($datoshojas as $datoshoja)
            @if ($datoshoja->documentoid =='F7-SETCS-ELE-CR-L1-01')
            <tr>
                <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                <th colspan="4" style="text-align: center">{{$datoshoja->titulo}}</th>
                <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                <th rowspan="2" colspan="2">{{$datoshoja->documentoid}}</th>
            </tr>
            <tr>
                <th colspan="4" style="text-align: center">{{$datoshoja->subtitulo}}</th>
            </tr>
            <tr>
                <th>No. de cambio</th>
                <th>Fecha</th>
                <th>ME/IE</th>
                <th>{{$datoshoja->meie}}</th>
                <th>Area</th>
                <th>{{$datoshoja->area}}</th>
                <th>Lugar</th>
                <th>{{$datoshoja->lugar}}</th>
                <th>Pagina</th>
                <th>{{$datoshoja->pagina}}</th>
            </tr>
            <tr>
                <th rowspan="2">{{$datoshoja->numero_cambio}}</th>
                <th>{{$datoshoja->fecha}}</th>
                <th>calidad</th>
                <th>{{$datoshoja->calidad}}</th>
                <th>Linea</th>
                <th>{{$datoshoja->linea}}</th>
                <th>Planta</th>
                <th colspan ="3">{{$datoshoja->planta}}</th>
            </tr>
            <tr>
                <th>{{$datoshoja->revision}}</th>
                <th>Manufactura</th>
                <th>{{$datoshoja->manufactura}}</th>
                <th>Op #</th>
                <th>{{$datoshoja->operacion}}</th>
                <th>Depto</th>
                <th>{{$datoshoja->departamento}}</th>
                <th>No.Parte</th>
                <th>{{$datoshoja->numeroparte}}</th>
            </tr>
            <tr>
                <th colspan="3" style="text-align: end">Mes:</th>
                <th colspan="1">{{$datoshoja->mes}}</th>
                <th colspan="3" style="text-align: end">Año:</th>
                <th colspan="3">{{$datoshoja->año}}</th>
            </tr>
            @endif
            @endforeach                
        </thead>
     </table>    
    <div class="table-responsive" align="center">
    <table class="table table-success table-bordered">
        <thead>
            <tr>
                <th rowspan = "2" >parametros turno</th>
                <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
                <th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th>
                <th>20</th><th>21</th><th>22</th><th>23</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th>
                <th>29</th><th>30</th><th>31</th>
            </tr>
            <tr>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="32" class= "table-secondary"><p align ="center">Al inicio del turno</p></th>
            </tr>
            @foreach ($registros as $registro)
            @if ($registro->turno == '5-7' && $registro->documentoid =='F7-SETCS-ELE-CR-L1-01' && $registro->partetabla == 'AL INICIO DE TURNO')
            <tr>
                <td>{{$registro->criterio}}</td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
                <td><select name="" id=""><option value="">--Seleccionar--</option><option value="">Si cumple</option><option value="">no cumple</option></select></td>
            </tr>                
            @endif
            @endforeach

        </tbody>
    </table>
    </div>

</body>
</html>