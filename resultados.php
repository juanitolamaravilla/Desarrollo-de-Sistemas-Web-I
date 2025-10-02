<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de Datos!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive2">
        <h1>¡RESULTADOS!</h1>
        <center>
            <img id="imagenAleatoria" src="" alt="Imagen aleatoria">
        </center>
        <h2>¡Bien Hecho!</h2>
        <?php
            $name = $_POST['Name'];
            $age = $_POST['Age'];
            $city = $_POST['City'];
            $brithday = $_POST['Brithday'];
            $hobby = $_POST['Hobby'];

            echo '<p><b><Nombre:</b> '.$name.'</p>';
            echo '<p><b><Edad:</b> '.$age.'</p>';
            echo '<p><b><CIudad:</b> '.$city.'</p>';
            echo '<p><b><Cumpleaños:</b> '.$brithday.'</p>';
            echo '<p><b><Pasatiempos:</b> '.$hobby.'</p>';
        ?>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-questio-circle fa 5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="CloseModal"></div>
            </div>
        </div>
        <center>
        <button onclick="Alert.render('You look very pretty today')" class="btn">¡Volver a ingresar!</button>
        <script src="js/app.js"></script>
        </center>
</div>

    <script>
        const imagenes = [
            "img/bien.gif",
            "img/bien1.gif",
            "img/bien2.gif",
            "img/bien3.gif",
            "img/bien4.gif"
        ];

        const aleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
        document.getElementById("imagenAleatoria").src = aleatoria;
    </script>
</body>
</html>
