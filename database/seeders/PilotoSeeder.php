<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Piloto;

class PilotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Piloto::factory(100)->create();

        /*DB::table('pilotos')->insert([
            'nombre' => 'Pepe',
            'fecha_nacimiento' => '1999-02-16',
            'numero_licencia' => 7315,
            'victorias' => 15,
            'escuderia_id' => 1
        ]);

        DB::table('pilotos')->insert([
            'nombre' => 'Mauro',
            'fecha_nacimiento' => '1999-05-21',
            'numero_licencia' => 7126,
            'victorias' => 10,
            'escuderia_id' => 1
        ]);

        DB::table('pilotos')->insert([
            'nombre' => 'Pepe',
            'fecha_nacimiento' => '1999-10-10',
            'numero_licencia' => 7367,
            'victorias' => 3,
            'escuderia_id' => 2
        ]);

        DB::table('pilotos')->insert([
            'nombre' => 'Pepe',
            'fecha_nacimiento' => '1999-08-05',
            'numero_licencia' => 7982,
            'victorias' => 12,
            'escuderia_id' => 2
        ]);*/
    }
}
