<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Datoshoja;

class DatosHojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datoshoja::create([
            'titulo' => 'Checklist de contaminacion',
            'subtitulo' => 'Op. 00 Practicas de cuarto limpio',
            'documentoid' => 'F7-SETCS-ELE-CR-L1-01',
            'numero_cambio' => '000',
            'fecha' => '1999-1-1',
            'revision' => '-',
            'meie' => 'U. Reyes / P. Uvalle',
            'calidad' => 'Rodolfo Guerrero',
            'manufactura' => 'Emmanuel Lopez',
            'area' => 'Cuarto Limpio 1',
            'linea' => '1',
            'operacion' => 0,
            'lugar' => 'Torreon',
            'planta' => '59',
            'departamento' => '926/970/972/971/959',
            'pagina' => '1 de 1',
            'numeroparte' => 'See FM Sheet',
            'mes' => 'Noviembre',
            'año' => 2022
        ]);
    }
}
