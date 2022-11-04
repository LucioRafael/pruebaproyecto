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
     <a href="" class="btn btn-warning">Editar</a> 
    <div class="table-responsive" align="center">
    <table class="table table-success table-bordered">
        <thead>
            <tr>
                <th rowspan = "2" >parametros turno</th>
                <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
                <th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th>
                <th>20</th><th>21</th><th>22</th><th>23</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th>
                <th>29</th><th>30</th><th>31</th><th>Acciones</th>
            </tr>
            <tr>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th>
                <th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>5/7</th><th>...</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="33" class= "table-secondary"><p align ="center">Al inicio del turno</p></th>
            </tr>
            @foreach ($registros as $registro)
            @if ($registro->turno == '5-7' && $registro->documentoid =='F7-SETCS-ELE-CR-L1-01' && $registro->partetabla == 'AL INICIO DE TURNO')
            <tr>
                <td>{{$registro->criterio}}</td>
                <td>
                    <select name="d1" id="1">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d1']}}</p>
                </td>
                <td>
                    <select name="d2" id="2">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d2']}}</p>
                </td>
                <td>
                    <select name="d3" id="3">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d3']}}</p>
                </td>
                <td>
                    <select name="d4" id="4">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d4']}}</p>
                </td>
                <td>
                    <select name="d5" id="5">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d5']}}</p>
                </td>
                <td>
                    <select name="d6" id="6">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d6']}}</p>
                </td>
                <td>
                    <select name="d7" id="7">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d7']}}</p>
                </td> 
                <td>
                    <select name="d8" id="8">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d8']}}</p>
                </td>
                <td>
                    <select name="d9" id="9">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d9']}}</p>
                </td>
                <td>
                    <select name="d10" id="10">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d10']}}</p>
                </td>
                <td>
                    <select name="d11" id="11">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d11']}}</p>
                </td>
                <td>
                    <select name="d12" id="12">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d12']}}</p>
                </td>
                <td>
                    <select name="d13" id="13">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d13']}}</p>
                </td>
                <td>
                    <select name="d14" id="14">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d14']}}</p>
                </td>
                <td>
                    <select name="d15" id="15">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d15']}}</p>
                </td>
                <td>
                    <select name="d16" id="16">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d16']}}</p>
                </td>
                <td>
                    <select name="d17" id="17">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d17']}}</p>
                </td>
                <td>
                    <select name="d18" id="18">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d18']}}</p>
                </td>
                <td>
                    <select name="d19" id="19">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d19']}}</p>
                </td>
                <td>
                    <select name="d20" id="20">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d20']}}</p>
                </td>
                <td>
                    <select name="d21" id="21">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d21']}}</p>
                </td>
                <td>
                    <select name="d22" id="22">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d22']}}</p>
                </td>
                <td>
                    <select name="d23" id="23">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d23']}}</p>
                </td>
                <td>
                    <select name="d24" id="24">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d24']}}</p>
                </td>
                <td>
                    <select name="d25" id="25">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d25']}}</p>
                </td>
                <td>
                    <select name="d26" id="26">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d26']}}</p>
                </td>
                <td>
                    <select name="d27" id="27">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d27']}}</p>
                </td>
                <td>
                    <select name="d28" id="28">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d28']}}</p>
                </td>
                <td>
                    <select name="d29" id="29">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d29']}}</p>
                </td>
                <td>
                    <select name="d30" id="30">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d30']}}</p>
                </td>
                <td>
                    <select name="d31" id="31">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d31']}}</p>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endif
            @endforeach
            <tr>
                <th colspan="33" class= "table-secondary"><p align ="center">Diario</p></th>
            </tr>
            @foreach ($registros as $registro)
            @if ($registro->turno == '5-7' && $registro->documentoid =='F7-SETCS-ELE-CR-L1-01' && $registro->partetabla == 'DIARIO')
            <tr>
                <td>{{$registro->criterio}}</td>
                <td>
                    <select name="" id="1">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d1']}}</p>
                </td>
                <td>
                    <select name="" id="2">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d2']}}</p>
                </td>
                <td>
                    <select name="" id="3">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d3']}}</p>
                </td>
                <td>
                    <select name="" id="4">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d4']}}</p>
                </td>
                <td>
                    <select name="" id="5">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d5']}}</p>
                </td>
                <td>
                    <select name="" id="6">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d6']}}</p>
                </td>
                <td>
                    <select name="" id="7">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d7']}}</p>
                </td> 
                <td>
                    <select name="" id="8">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d8']}}</p>
                </td>
                <td>
                    <select name="" id="9">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d9']}}</p>
                </td>
                <td>
                    <select name="" id="10">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d10']}}</p>
                </td>
                <td>
                    <select name="" id="11">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d11']}}</p>
                </td>
                <td>
                    <select name="" id="12">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d12']}}</p>
                </td>
                <td>
                    <select name="" id="13">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d13']}}</p>
                </td>
                <td>
                    <select name="" id="14">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d14']}}</p>
                </td>
                <td>
                    <select name="" id="15">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d15']}}</p>
                </td>
                <td>
                    <select name="" id="16">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d16']}}</p>
                </td>
                <td>
                    <select name="" id="17">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d17']}}</p>
                </td>
                <td>
                    <select name="" id="18">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d18']}}</p>
                </td>
                <td>
                    <select name="" id="19">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d19']}}</p>
                </td>
                <td>
                    <select name="" id="20">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d20']}}</p>
                </td>
                <td>
                    <select name="" id="21">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d21']}}</p>
                </td>
                <td>
                    <select name="" id="22">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d22']}}</p>
                </td>
                <td>
                    <select name="" id="23">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d23']}}</p>
                </td>
                <td>
                    <select name="" id="24">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d24']}}</p>
                </td>
                <td>
                    <select name="" id="25">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d25']}}</p>
                </td>
                <td>
                    <select name="" id="26">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d26']}}</p>
                </td>
                <td>
                    <select name="" id="27">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d27']}}</p>
                </td>
                <td>
                    <select name="" id="28">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d28']}}</p>
                </td>
                <td>
                    <select name="" id="29">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d29']}}</p>
                </td>
                <td>
                    <select name="" id="30">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d30']}}</p>
                </td>
                <td>
                    <select name="" id="31">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d31']}}</p>
                </td>
            </tr>
            @endif
            @endforeach
            <tr>
                <th colspan="33" class="table-secondary"><p align = "center">Nota: Durante su verificacion diaria, reemplace cualquier material que encuentre dañado</p></th>
            </tr>
            @foreach ($registros as $registro)
            @if ($registro->turno == '5-7' && $registro->documentoid =='F7-SETCS-ELE-CR-L1-01' && $registro->partetabla == 'NOTA')
            <tr>
                <td>{{$registro->criterio}}</td>
                <td>
                    <select name="" id="1">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d1']}}</p>
                </td>
                <td>
                    <select name="" id="2">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d2']}}</p>
                </td>
                <td>
                    <select name="" id="3">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d3']}}</p>
                </td>
                <td>
                    <select name="" id="4">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d4']}}</p>
                </td>
                <td>
                    <select name="" id="5">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d5']}}</p>
                </td>
                <td>
                    <select name="" id="6">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d6']}}</p>
                </td>
                <td>
                    <select name="" id="7">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d7']}}</p>
                </td> 
                <td>
                    <select name="" id="8">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d8']}}</p>
                </td>
                <td>
                    <select name="" id="9">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d9']}}</p>
                </td>
                <td>
                    <select name="" id="10">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d10']}}</p>
                </td>
                <td>
                    <select name="" id="11">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d11']}}</p>
                </td>
                <td>
                    <select name="" id="12">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d12']}}</p>
                </td>
                <td>
                    <select name="" id="13">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d13']}}</p>
                </td>
                <td>
                    <select name="" id="14">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d14']}}</p>
                </td>
                <td>
                    <select name="" id="15">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d15']}}</p>
                </td>
                <td>
                    <select name="" id="16">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d16']}}</p>
                </td>
                <td>
                    <select name="" id="17">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d17']}}</p>
                </td>
                <td>
                    <select name="" id="18">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d18']}}</p>
                </td>
                <td>
                    <select name="" id="19">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d19']}}</p>
                </td>
                <td>
                    <select name="" id="20">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d20']}}</p>
                </td>
                <td>
                    <select name="" id="21">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d21']}}</p>
                </td>
                <td>
                    <select name="" id="22">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d22']}}</p>
                </td>
                <td>
                    <select name="" id="23">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d23']}}</p>
                </td>
                <td>
                    <select name="" id="24">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d24']}}</p>
                </td>
                <td>
                    <select name="" id="25">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d25']}}</p>
                </td>
                <td>
                    <select name="" id="26">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d26']}}</p>
                </td>
                <td>
                    <select name="" id="27">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d27']}}</p>
                </td>
                <td>
                    <select name="" id="28">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d28']}}</p>
                </td>
                <td>
                    <select name="" id="29">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d29']}}</p>
                </td>
                <td>
                    <select name="" id="30">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d30']}}</p>
                </td>
                <td>
                    <select name="" id="31">
                    @foreach ($options as $option)
                    <option value="{{$option['opcion']}}">{{$option['opcion']}}</option>
                    @endforeach
                    </select>
                    <br><br><br>
                    <p>{{$registro['d31']}}</p>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="contanier">
        <a href="" class="btn btn-primary">Guardar Cambios</a>
        <a href="" class="btn btn-success">Añadir criterio</a>
    </div>
</body>
</html>