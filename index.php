<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de Datos Personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>
        <form action="resultados.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="Ingresa tu nombre"/>
            <hr>
            <label for="age">Edad</label>
            <input type="number" id="age" name="age"/>
            <hr>
            <label for="city">Ciudad</label>
            <input type="text" id="city" name="city" value="Ingresa tu ciudad"/>
            <hr>
            <label for="hobby">Pasatiempo</label>
            <input type="text" id="hobby" name="hobby" value="Ingresa tu pasatiempo"/>
            <hr>
            <button type="submit" a href>¡Ingresamos Datos!</button>
            <hr>
        </form>
    </div>

</body>
</html>
