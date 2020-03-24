<?php

    
    $s = 'localhost';
    $u = 'root';
    $p = '';
    

    $conexion = mysqli_connect($s,$u,$p);


    if ($conexion->connect_errno)
    {
        echo "no conectado"; 
    }

    $db_selected = mysqli_select_db($conexion,'aguabd');

    if (!$db_selected) {
        // esto uso para saber si existe o no la base de datos
        $sql = "CREATE DATABASE aguabd"; 

        if(mysqli_query($conexion,$sql))
        {
            echo 'se creo la bd';

        }
        mysqli_close($conexion);


        include('agregartb.php');

        
   }
   else 
   {
       $bd = 'aguabd';
   }
   

    
   

?>
