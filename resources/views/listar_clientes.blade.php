@foreach($clientes as $cliente)
    <p><a href="{{ route('verClientes', ['id' => $cliente->id]) }}">{{ $cliente->id }} - {{ $cliente->nombre }}</a></p>
@endforeach