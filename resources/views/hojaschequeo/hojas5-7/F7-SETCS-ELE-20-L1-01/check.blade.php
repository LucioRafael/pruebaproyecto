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
    <div class="table-responsive">
        <div class="table-responsive" align="center">
            <form action="{{route('finalcheck')}}" method="POST">

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
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                        <th>5/7</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Al inicio del turno</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '5-7' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO')
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <select name="d1" id="d1">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d2" id="d2">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d3" id="d3">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d4" id="d4">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d5" id="d5">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d6" id="d6">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d7" id="d7">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d8" id="d8">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d9" id="d9">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d10" id="d10">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d11" id="d11">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d12" id="d12">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d13" id="d13">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d14" id="d14">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d15" id="d15">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d16" id="d16">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d17" id="d17">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d18" id="d18">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d19" id="d19">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d20" id="d20">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d21" id="d21">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d22" id="d22">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d23" id="d23">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d24" id="d24">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d25" id="d25">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d26" id="d26">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d27" id="d27">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d28" id="d28">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d29" id="d29">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d30" id="d30">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d31" id="d31">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Diario</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '5-7' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO')
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <select name="d1" id="d1">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d2" id="d2">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d3" id="d3">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d4" id="d4">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d5" id="d5">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d6" id="d6">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d7" id="d7">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d8" id="d8">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d9" id="d9">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d10" id="d10">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d11" id="d11">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d12" id="d12">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d13" id="d13">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d14" id="d14">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d15" id="d15">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d16" id="d16">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d17" id="d17">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d18" id="d18">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d19" id="d19">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d20" id="d20">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d21" id="d21">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d22" id="d22">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d23" id="d23">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d24" id="d24">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d25" id="d25">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d26" id="d26">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d27" id="d27">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d28" id="d28">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d29" id="d29">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d30" id="d30">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d31" id="d31">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Nota: Durante su verificacion diaria, reemplace cualquier material
                                    que
                                    encuentre dañado</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '5-7' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA')
                                <tr>
                                    <td>{{ $registro->criterio }}</td>
                                    <td>
                                        <select name="d1" id="d1">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d2" id="d2">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d3" id="d3">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d4" id="d4">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d5" id="d5">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d6" id="d6">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d7" id="d7">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d8" id="d8">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d9" id="d9">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d10" id="d10">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d11" id="d11">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d12" id="d12">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d13" id="d13">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d14" id="d14">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d15" id="d15">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d16" id="d16">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d17" id="d17">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d18" id="d18">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d19" id="d19">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d20" id="d20">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d21" id="d21">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d22" id="d22">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d23" id="d23">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d24" id="d24">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d25" id="d25">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d26" id="d26">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d27" id="d27">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d28" id="d28">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d29" id="d29">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d30" id="d30">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="d31" id="d31">
                                            @foreach ($options as $option)
                                                <option value="{{ $option['opcion'] }}">{{ $option['opcion'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
            </table>
            @csrf
            @method('PUT')
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>            
            </form>
        </div>
</body>
</html>