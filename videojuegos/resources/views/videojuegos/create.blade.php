<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('videojuegos.store')}}" method="post">
        @csrf
        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>
        <label>Pegi: </label>
        <input type="number" name="pegi"><br><br>
        <label>Genero: </label>
        <input type="number" name="genero"><br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>