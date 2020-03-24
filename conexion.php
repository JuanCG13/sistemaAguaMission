<?php

    
    $s = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'aguabd';

    $conexion = new mysqli($s,$u,$p,$bd);

    if ($conexion->connect_errno)
    {
        echo "no conectado"; 
    }
    

    
   

?>