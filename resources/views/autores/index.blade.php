<!DOCTYPE html>
<html>
<head>
    <title>Autores</title>
</head>
<body>
<h1>Autores</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Nacionalidade</th>
    </tr>
    @foreach ($autores as $autor)
        <tr>
            <td>{{ $autor->nome }}</td>
            <td>{{ $autor->data_nascimento }}</td>
            <td>{{ $autor->nacionalidade }}</td>
        </tr>
    @endforeach
</table>

<a href="{{ route('autores.create') }}">Adicionar Autor</a>

</body>
</html>
