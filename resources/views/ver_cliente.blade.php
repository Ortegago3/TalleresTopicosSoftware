<p>ID: {{ $cliente->id }}</p>
<p>Nombre: {{ $cliente->nombre }}</p>
<p>Email: {{ $cliente->email }}</p>
<p>Teléfono: {{ $cliente->telefono }}</p>
<p>Dirección: {{ $cliente->direccion }}</p>
<a href="{{ route('borrarCliente', ['id' => $cliente->id]) }}">Borrar Cliente</a>

