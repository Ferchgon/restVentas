<!-- resources/views/consulta/form.blade.php -->

<form action="{{ route('consultarPorUUID') }}" method="post">
    @csrf
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" required>
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>
    <br>
    <label for="contrato">Contrato:</label>
    <input type="text" name="contrato" required>
    <br>
    <label for="uuid">UUID:</label>
    <input type="text" name="uuid" required>
    <br>
    <button type="submit">Consultar por UUID</button>
</form>
