<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuderia;
use App\Models\Piloto;

class EscuderiaController extends Controller
{
    public function main(){
        $teams = Escuderia::all();
        return view('layouts.listofteams', ['teams' => $teams]);
    }

    public function delete($id){
        $team = Escuderia::find($id);
        $team->delete();
        $pilots = Piloto::where('escuderia_id', $id)
            ->get();
        foreach($pilots as $pilot){
            $pilot->escuderia_id = null;
            $pilot->save();          
        }
        return redirect('/');
    }

    public function create(Request $request){
        $team = new Escuderia;
        $team->nombre = $request->nombre;
        $team->fecha_creacion = $request->fecha;
        $team->num_pilotos = $request->pilotos;
        $team->sobre_presupuesto = $request->presupuesto;
        $team->save();
        return redirect('/');
    }
}
