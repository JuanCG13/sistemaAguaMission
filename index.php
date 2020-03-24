<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <title>VENTAS</title>
</head>
<body>
<?php include('barra.php'); ?>

<div class="container">
    <form action="redirigir.php" method="post">
        <div id="titulo">
            <h1>ADMINISTRAR VENTAS</h1>
        </div>
        <br>
        <div class="datos">
            <label for=""> Camiones </label>
            <select name="camion" id="camion">
                <option value="camion01">
                    Camion 01
                </option>
                <option value="camion02">
                    Camion 02
                </option>
                <option value="camion03">
                    Camion 03
                </option>
                <option value="camion04">
                    Camion 04
                </option>
            </select>
        </div>
        <br>
        <input type="submit" value="Elegir">
    </form>
    <?php
       
    ?>
    
</div>

    
</body>
</html>