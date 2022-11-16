<th>
    <form action="{{ route('escuderia.delete', $team->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <tr>{{ $team->id }} -></tr>
        <tr>{{ $team->nombre }} <-></tr>
        <tr>{{ $team->fecha_creacion }} <-></tr>
        <tr>{{ $team->num_pilotos }} <-></tr>
        <tr>{{ $team->sobre_presupuesto }}</tr>
        <tr><button type="submit">Delete</button></tr>
        <br>
    </form>
</th>