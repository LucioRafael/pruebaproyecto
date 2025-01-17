<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-TPM-ELE-60-L1-01-4</title>
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
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                <a href="F7-TPM-ELE-60-L1-01-4T2" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
        </nav>
        <br>
    </div>
    <div class="table-responsive">
        <div class="table-responsive" align="center">
            @foreach ($datoshojas as $datoshoja)
            @endforeach
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                        <th>2</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Diario</p>
                            </th>
                        </tr>
                        @foreach ($registros as $key=>$registro)
                        <form action="{{route('finalcheckTPM6014T2',$registro->id)}}" method="POST">                            
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-TPM-ELE-60-L1-01-4' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <select name="registro[{{$key}}][d1]" id="d1">
                                            <option value="{{$registro->d1}}">{{$registro->d1}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d2]" id="d2">
                                            <option value="{{$registro->d2}}">{{$registro->d2}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d3]" id="d3">
                                            <option value="{{$registro->d3}}">{{$registro->d3}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d4]" id="d4">
                                            <option value="{{$registro->d4}}">{{$registro->d4}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d5]" id="d5">
                                            <option value="{{$registro->d5}}">{{$registro->d5}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d6]" id="d6">
                                            <option value="{{$registro->d6}}">{{$registro->d6}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d7]" id="d7">
                                            <option value="{{$registro->d7}}">{{$registro->d7}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d8]" id="d8">
                                            <option value="{{$registro->d8}}">{{$registro->d8}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d9]" id="d9">
                                            <option value="{{$registro->d9}}">{{$registro->d9}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d10]" id="d10">
                                            <option value="{{$registro->d10}}">{{$registro->d10}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d11]" id="d11">
                                            <option value="{{$registro->d11}}">{{$registro->d11}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d12]" id="d12">
                                            <option value="{{$registro->d12}}">{{$registro->d12}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d13]" id="d13">
                                            <option value="{{$registro->d13}}">{{$registro->d13}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d14]" id="d14">
                                            <option value="{{$registro->d14}}">{{$registro->d14}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d15]" id="d15">
                                            <option value="{{$registro->d15}}">{{$registro->d15}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d16]" id="d16">
                                            <option value="{{$registro->d16}}">{{$registro->d16}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d17]" id="d17">
                                            <option value="{{$registro->d17}}">{{$registro->d17}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d18]" id="d18">
                                            <option value="{{$registro->d18}}">{{$registro->d18}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d19]" id="d19">
                                            <option value="{{$registro->d19}}">{{$registro->d19}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d20]" id="d20">
                                            <option value="{{$registro->d20}}">{{$registro->d20}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d21]" id="d21">
                                            <option value="{{$registro->d21}}">{{$registro->d21}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d22]" id="d22">
                                            <option value="{{$registro->d22}}">{{$registro->d22}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d23]" id="d23">
                                            <option value="{{$registro->d23}}">{{$registro->d23}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d24]" id="d24">
                                            <option value="{{$registro->d24}}">{{$registro->d24}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d25]" id="d25">
                                            <option value="{{$registro->d25}}">{{$registro->d25}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d26]" id="d26">
                                            <option value="{{$registro->d26}}">{{$registro->d26}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d27]" id="d27">
                                            <option value="{{$registro->d27}}">{{$registro->d27}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d28]" id="d28">
                                            <option value="{{$registro->d28}}">{{$registro->d28}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d29]" id="d29">
                                            <option value="{{$registro->d29}}">{{$registro->d29}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d30]" id="d30">
                                            <option value="{{$registro->d30}}">{{$registro->d30}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="registro[{{$key}}][d31]" id="d31">
                                            <option value="{{$registro->d31}}">{{$registro->d31}}</option>
                                            <option value="-">-</option>
                                            <option value="Cumple">Cumple</option>
                                            <option value="No Cumple">No Cumple</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-TPM-ELE-60-L1-01-4' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                    </td>
                                    <td>
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-TPM-ELE-60-L1-01-4' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                    </td>
                                    <td>
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary" id="miBoton">Guardar Cambios</button>
                        </form>
            </table>
            <br><br><br><br><br><br><br><br>
        </div>
</body>
</html>