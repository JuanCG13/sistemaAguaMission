<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <script src="js/funciones.js"></script>
    <title>CAMION 04</title>
</head>
<body>
<?php include('barra.php'); ?>

<div class="container">
    <form action="insertar.php" method="post">

        <input type="hidden" name="idcamion" value='camion04'>

        <div id="titulo">
            <h1>CAMION 04</h1>
        </div>

        <br>
        <div class="datos">
                <label for=""> Productos</label>
                <select name="productos" id="productos">
                    <option value="20 litros">
                        20 LTS
                    </option>
                    <option value="10 litros">
                        10 LTS
                    </option>
                    <option value="5 litros">
                        5 LTS
                    </option>
                    <option value="2 litros">
                        2 LTS x 4
                    </option>
                    <option value="1 litro">
                        1LTS SPORT x 6
                    </option>
                    <option value="500 ml">
                        500 ML x 6
                    </option>
                    <option value="500 ml sport">
                        500 ML SPORT x 6
                    </option>
                    <option value="Dispensador P.">
                        Dispensador de Plastico
                    </option>
                    <option value="Dispensador E.">
                        Dispensador Electrico
                    </option>
                </select>
            </div> 
        <br>
        <div class="datos">
            <label for="precio"> Precio de Venta </label>
            <input type="number" name="precio" id="precio" required>
        </div>
        <br>
        <div class="datos">
            <label for="cantidad"> Cantidad </label>
            <input type="number" name="cantidad" id="cantidad" required>
        </div>
        <br>
        <div class="datos">
            <input type="submit" value="Registrar" id='registrar' onclick="return confirmarguardado()">
            <button class='atras'>
            <a href="index.php" onclick="return confirmaratras()"> Atras</a>  
            </button>     
        </div>
        <br>
    </form>
    
</div>


<div class='tabla'>
    <table id="listado_productos">
        <thead>
        <tr>
            <td><strong>Producto</strong></td>
            <td><strong>Precio</strong></td>
            <td><strong>Cantidad</strong></td>
            <td><strong>Total</strong></td>
            <td><strong>Fecha</strong></td>
            <td><strong>Hora</strong></td>
        </tr>
        
        <?php
            include('mostrar.php');
        ?>
        </thead>
    </table>
    
</div>
    
</body>
</html>