@extends('layouts.main')

@section('title', "Create Team")

@section('content')
    <div>
    <form action="{{ route('escuderia.create') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre">
                <br>
                <label for="fecha">Fecha Creacion:</label><input type="date" name="fecha" id="fecha">
                <br>
                <label for="pilotos">Numero de pilotos:</label><input type="text" name="pilotos" id="pilotos">
                <br>
                <label for="presupuesto">Sobre Presupuesto:</label><input type="text" name="presupuesto" id="presupuesto">
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection