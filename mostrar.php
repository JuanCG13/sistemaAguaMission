<?php

include('redirigir.php');
include('conexion.php');

//conexion a la base de datos 
$conn = mysqli_connect($s,$u,$p,$bd);


//pregunta si la variable post existe y pregunta si no esta vacia para realizar la operacion 
if(isset($_POST['idcamion']) && !empty($_POST['idcamion']))
{
    $camion = $_POST['idcamion'];
}

if ( $conn === false)
{
    echo ' no se a podido conectar con la bd';
}


//esta variable contiene la consulta para selecionar todos los campos que contenga la variable del post
// para mostrar solo los datos que contengan el campo de la variable obtenida 
$consulta = "SELECT*FROM ventas WHERE camion = '$camion' ";  


//en la funcion de mysqli se inserta la consulta y la conexion a la bd para luego insertarla en la variable datos
$datos = mysqli_query($conn,$consulta);


//el bucle while se utiliza para recorrer las filas de la base de datos 
//la funcion de mysqli utiliza la variable datos para selecionar los campos o filas de la base de datos 
//y la variable fila es la que utiliza el bucle while para recorrerlo hasta el final 
// en este bucle tambien se realiza un post para eliminar un registro de la tabla 
// en el fomr del post se establecen inputs ocultos para mandar la informacion del id del cual se desea eliminar 
// y tambien se manda la variable camion para redirigir a la misma pagina otra vez 
// tambien esta incluida la funcion en donde se pide la confirmacion de la accion para eliminar el registro
// se ha añadido un boton de editar adentro de otro formulario para realizar la funcion de actualizacion
// manda los mismo datos que el botn borrar pero a una pagina diferente de php 
// tambien se calcula el total de la cantidad por el precio 
while($fila = mysqli_fetch_array($datos))
{ 
    $total = $fila['cantidad'] * $fila['precio'];
    
    echo '
    
    <script src="comp/jquery.js"></script>
    <script src="js/funciones.js"></script>


    <script type="text/javascript">

        $(document).ready(function(){

        $(".',$fila['id'],'actualizar").hide();
        
          
        
        $(".',$fila['id'],'editar").on( "click", function() {
            $(".',$fila['id'],'editar").hide(); //muestro mediante id
            $(".',$fila['id'],'orden").hide();
            $(".',$fila['id'],'actualizar").show();
            $("#',$fila['id'],'cancelar").show();

                //$(".target").show(); //muestro mediante clase.  
        });
        
        
        $("#',$fila['id'],'cancelar").on( "click", function() {

            $("#',$fila['id'],'cancelar").hide(); //oculto mediante id
            $(".',$fila['id'],'orden").show(); //oculto mediante id
            $(".',$fila['id'],'editar").show();
            $(".',$fila['id'],'actualizar").hide();
        
                //$(".target").hide(); //muestro mediante clase 
        });
        
        
        });
 
    </script>
    
    <tr class="estilotabla">';
    echo '<td>',$fila['producto'],'</td>';
    echo '<td>',$fila['precio'],'</td>';
    echo '<td>',$fila['cantidad'],'</td>';
    echo '<td>',$total,'</td>';
    echo '<td>',$fila['fecha'],'</td>';
    echo '<td>',$fila['hora'],'</td>';
    echo '<td id="botones">


    <div class="ordenar" style="display: flex;">
        <div class="',$fila['id'],'orden">
    
            <form action="redirigir.php" method="post">

                <input type="hidden" name="idborrar" value="',$fila['id'],'">
                <input type="hidden" name="camion" value="',$camion,'">
                <input value="BORRAR" id="borrar" type="submit" value onclick="return confirmarborrar()">

            </form> 
        </div>
        <br>
        <div class="',$fila['id'],'editar">
    
                <input value="EDITAR" id="editar" type="submit">

        </div>


        <div class="',$fila['id'],'actualizar">

            <form action="redirigir.php" method="post">
            <input type="hidden" name="ideditar" value="',$fila['id'],'">
            <input type="hidden" name="camion" value="',$camion,'">
    
    
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
                <label for=""> Precio Producto </label>
                <input type="number" name="precio" id="precio" required placeholder="',$fila['precio'],'">
            </div>
            <br>
            <div class="datos">
                <label for=""> Cantidad </label>
                <input type="number" name="cantidad" id="cantidad" required  placeholder="',$fila['cantidad'],'">
            </div>
            <br>
            <div class="datos">
                <input type="submit" value="ACTUALIZAR" id="registrar" onclick="return confirmarguardado()">
                <input id="',$fila['id'],'cancelar" value="CANCELAR" type="reset" >

            </div>
    
    
            </form>

        </div>  

    </div> 
    </td>';
    echo '</tr>';
}






?>