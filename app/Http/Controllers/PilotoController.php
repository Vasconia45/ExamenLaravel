<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piloto;
use App\Models\Escuderia;

class PilotoController extends Controller
{
    public function create(Request $request){
        $piloto = new Piloto;
        $piloto->nombre = $request->nombre;
        $piloto->fecha_nacimiento = $request->fecha;
        $piloto->numero_licencia = $request->licencia;
        $piloto->victorias = $request->victorias;
        $piloto->save();
        return redirect('/');
    }

    public function showasign(){
        $teams = Escuderia::where('num_pilotos', '<', 4)
            ->get();
        $pilots = Piloto::all();
        return view('layouts.asignpilottoteam', ['teams' => $teams], ['pilots' => $pilots]);
    }

    public function asign(Request $request){
        dd($request);
    }
}
