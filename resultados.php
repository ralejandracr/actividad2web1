<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $hobby = $_POST['hobby'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive2">
        <center>
            <h1>Resultados</h1>
            <br>
            <img src="img/gato.jpg" alt="gato feliz" width="400">
            <br>
            <?php
                echo '<p><b>Nombre:<b/> '.$name.'</p><br>';
                echo '<p><b>Edad:<b/> '.$age.'</p><br>';
                echo '<p><b>Ciudad:<b/> '.$city.'</p><br>';
                echo '<p><b>Pasatiempo:<b/> '.$hobby.'</p><br>';
            ?>
            <h2>¡Bien Hecho!</h2>
            <div id="popUpOverlay"></div>
            <div id="popUpBox">
                <div id="box">
                    <i class="fas fa-question-circle fa-5x"></i>
                    <h1>¿Volver a ingresar datos?</h1>
                    <div id="closeModal"></div>
                </div>
            </div>
            <button onclick="Alert.render('You look very pretty today.')" class="btn">¡Volver a ingresar!</button>
            <script src="js/app.js"></script>
        </center>
    </div>
    
</body>
</html>
