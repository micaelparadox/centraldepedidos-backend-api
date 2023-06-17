<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Autor</title>
</head>
<body>
<h1>Adicionar Autor</h1>

<form method="post" action="{{ route('autores.store') }}">
    @csrf
    Nome:<br>
    <input type="text" name="nome"><br>
    Data de Nascimento:<br>
    <input type="date" name="data_nascimento"><br>
    Nacionalidade:<br>
    <input type="text" name="nacionalidade"><br>
    <input type="submit" value="Adicionar Autor">
</form>

</body>
</html>
