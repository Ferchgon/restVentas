<!-- resources/views/consulta/resultado.blade.php -->

@if (isset($data))
    <h1>Resultado Exitoso</h1>
    <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
@elseif (isset($error))
    <h1>Error en la Consulta</h1>
    <pre>{{ $error }}</pre>
@endif
