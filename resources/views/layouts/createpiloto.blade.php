@extends('layouts.main')

@section('title', "Create Piloto")

@section('content')
    <div>
        <form action="{{ route('piloto.create') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre">
                <br>
                <label for="fecha">Fecha Nacimiento:</label><input type="date" name="fecha" id="fecha">
                <br>
                <label for="licencia">Numero de licencia:</label><input type="text" name="licencia" id="licencia">
                <br>
                <label for="victorias">Victorias:</label><input type="text" name="victorias" id="victorias">
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection