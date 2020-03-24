<?php

//aca se realiza un proceso similar que en el archivo de mostrar.php solo que se cargar un formulario 
//para completar los dtos necesarios para la actualizacion 
//el formulario se carga en una impresion de oantalla de php para luego poder realizar la consulta de actualizacion 


    include('conexion.php');
//la consulta extrae todos los datos de la id de la pagina mostrar para identificar el registro a actualizar
    $consulta = "SELECT*FROM ventas WHERE id = '$_POST[ideditar]' ";
//aca se guarda la conexion a la base de datos y la consulta
    $datos = mysqli_query($conexion,$consulta);
//luego con la funcion de mysqlifectharray se convierten los datos selecionados del registro en un vestor que contendra los mismos
    $fila = mysqli_fetch_array($datos);


    echo '
    
    <script src="js/funciones.js"></script>

    <div>
    <form action="redirigir.php" method="post">
    <input type="hidden" name="camion" value="',$_POST['camion'],'">


    <div class="datos">
        <label for=""> Producto ',$fila['producto'],'</label>
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
    <label for="precio"> Precio ',$fila['precio'],' </label>
    <input type="number" name="precio" id="precio" required>
</div>
<br>
<div class="datos">
    <label for="cantidad"> Cantidad ',$fila['cantidad'],' </label>
    <input type="number" name="cantidad" id="cantidad" required>
</div>
<br>
<div class="datos">
    <input type="hidden" name="id" value="',$_POST['ideditar'],'">
    <input type="submit" value="Actualizar" id="registrar" onclick="return confirmarguardado()">
    <button class="atras">
    <a href="javascript:history.back(-1)" onclick="return confirmaratras()"> Atras</a>  
    </button>     
</div>
<br>


</form>
</div>
    ';




?>


