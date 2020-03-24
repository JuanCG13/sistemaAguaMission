<?php

// se pregunta si la variable camion de la pagina index existe y si no esta vacia 
if(isset($_POST['camion']) && !empty($_POST['camion']))
{
    $camion = $_POST['camion'];

    //en estas condicionales se define a donde se va a redirigir la pagina despues de selecionar la opcion de registrar o borrar
    if ($camion === 'camion01')
    {
        include_once('camion01.php');
    }
    if ($camion === 'camion02')
    {
        include_once('camion02.php');
    }
    if ($camion === 'camion03')
    {
        include_once('camion03.php');
    }
    if ($camion === 'camion04')
    {
        include_once('camion04.php');
    }


    //en esta parte se pregunta si el id que se envio para borrar en el archivo mostrar.php existe o no 
    //para dar la indicacion de hacer un post para borrar un determinado registro
    if(isset($_POST['idborrar']) && !empty($_POST['idborrar']))
    {
        include('conexion.php');
        $con = mysqli_connect($s,$u,$p,$bd);
        $sql = "DELETE FROM ventas WHERE id='$_POST[idborrar]'";
        mysqli_query($con,$sql);
    }


    if(isset($_POST['ideditar']))
    {

        include('conexion.php'); 
    
        $con = mysqli_connect($s,$u,$p,$bd);
    
        $producto = mysqli_real_escape_string($con,$_POST['productos']);
        $precio = mysqli_real_escape_string($con,$_POST['precio']);
        $cantidad = mysqli_real_escape_string($con,$_POST['cantidad']);
    
    


        if(empty($_POST['precio']) && empty($_POST['cantidad']))
        {

            $consulta = "UPDATE ventas SET producto='$producto', precio='$precio', cantidad='$cantidad' WHERE id = '$_POST[ideditar]' ";
            //aca se guarda la conexion a la base de datos y la consulta
        
            mysqli_query($con,$consulta);
        }

        if(!empty($_POST['precio']))
        {
            $consulta = "UPDATE ventas SET producto='$producto', precio='$precio'  WHERE id = '$_POST[ideditar]' ";
            //aca se guarda la conexion a la base de datos y la consulta
    
            mysqli_query($con,$consulta);
        }

        if(!empty($_POST['cantidad']))
        {
            $consulta = "UPDATE ventas SET producto='$producto', cantidad='$cantidad'  WHERE id = '$_POST[ideditar]' ";
            //aca se guarda la conexion a la base de datos y la consulta
    
            mysqli_query($con,$consulta);
        }


        mysqli_close($con);
    }
    
            
                
        
        
}









?>
