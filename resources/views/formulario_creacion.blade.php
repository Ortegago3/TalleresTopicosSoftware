<form action="{{ route('insertarCliente') }}" method="post">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="direccion" placeholder="Dirección">
    <button type="submit">Crear Cliente</button>
</form>