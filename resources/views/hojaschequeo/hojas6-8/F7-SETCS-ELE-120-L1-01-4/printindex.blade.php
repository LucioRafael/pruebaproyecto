<!DOCTYPE html>
<html lang="en">
<style>
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-120-L1-01-T2</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-120-L1-01')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
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
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '2' &&
                                $registro->documentoid == 'F7-SETCS-ELE-120-L1-01-4' &&
                                $registro->partetabla == 'ARRIBA')
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($registro['d1'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d4'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d4'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d5'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d5'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d6'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d6'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d8'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d8'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d10'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d10'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d11'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d11'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d14'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d14'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d21'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
</body>
</html>