@extends('layouts.main')

@section('title', "Main page")

@section('content')
    <div>
        <table>
            <thead>Teams:</thead>
            <br>
            <tbody>
                @each('partials.teams', $teams, 'team', 'partials.empty')
            </tbody>
        </table>
    </div>
@endsection
