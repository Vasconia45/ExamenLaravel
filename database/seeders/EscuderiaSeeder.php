<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Escuderia;

class EscuderiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuderia::factory(5)->create();
        /*DB::table('escuderias')->insert([
            'nombre' => 'Ferrari',
            'fecha_creacion' => '1909-01-01',
            'num_pilotos' => 2,
            'sobre_presupuesto' => true
        ]);

        DB::table('escuderias')->insert([
            'nombre' => 'Lamborghini',
            'fecha_creacion' => '1912-04-15',
            'num_pilotos' => 2,
            'sobre_presupuesto' => false
        ]);*/
    }
}
