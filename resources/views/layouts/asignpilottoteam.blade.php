@extends('layouts.main')

@section('title', "Asign Pilot to Team")

@section('content')
    <div>
        <form action="{{ route('asignpilottoteam') }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <select for="escuderia">
                    @foreach($teams as $team)
                    <option name="escuderia" value="{{ $team->nombre }}"> {{ $team->nombre }}</option>
                    @endforeach
                </select>
                <br>
                <br>
                <select for="piloto">
                    @foreach($pilots as $pilot)
                    <option name="piloto" value="{{ $pilot->nombre }}"> {{ $pilot->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection