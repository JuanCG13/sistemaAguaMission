<?php


    // conexion para agregar la tabla si no existe
    $s = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'aguabd';

    $conexion = mysqli_connect($s,$u,$p,$bd);


    $sql = "CREATE TABLE IF NOT EXISTS `ventas` ( `id` int(255) NOT NULL, 
    `camion` varchar(255) NOT NULL, 
    `producto` varchar(255) NOT NULL, 
    `precio` int(255) NOT NULL, 
    `cantidad` int(255) NOT NULL, 
    `fecha` date NOT NULL DEFAULT current_timestamp(), 
    `hora` time NOT NULL DEFAULT current_timestamp() ) 
    ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ";

    mysqli_query($conexion,$sql);

    mysqli_close($conexion);

    include('idk.php');
    include('ida.php');







?>