<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayudantia</title>
</head>

<body style="background-color: brown">
    <h1>Hola Mundo</h1>
    <h2>Hola Mundo</h2>
    <h6>Hola como estas</h6>
    <p>Html es muy divertido y sensillo</p>
    <a href="https://youtu.be/CiW4d-Dd8wk?list=PLzmzDS3JCHZ-pItZ85WaEQhWyrA4pJc1F">Youtube</a>
    <img src="resources/imagenes/descarga.png" alt="cirno">
    <button>Presionar</button>
    <input type="email">
    <input type="number" min="0" placeholder="Ingresa un numero">
<hr>
    <h2>Quien soy</h2>
    <ul>
        <li>Nombre: el yo</li>
        <li>Edad: XD</li>
        <li>Pais: CHile</li>
        <a href="{{ route('register')}}">Register</a>
    </ul>
<hr>
    <form action="" method="POST">
        <label for="">Edad</label>
        <input type="number" min="0" placeholder="Ingresa un numero">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>
