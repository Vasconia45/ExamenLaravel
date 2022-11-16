<!DOCTYPE html>
<html>
    <body>
        <div>
            <h1>@yield('title', "Exam")</h1>
            <div>
                <form>
                    @csrf
                    <button type="submit" formaction="{{ route('pilotoshow') }}">New Piloto</button>
                    <button type="submit" formaction="{{ route('escuderiashow') }}">New Team</button>
                    <button type="submit" formaction="{{ route('asignpilottoteamshow') }}">Asign</button>
                </form>
            </div>
            <br><br>
            @section('content')

            @show
        </div>
    </body>
</html>