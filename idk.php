<?php

    $s = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'aguabd';

    $conexion = mysqli_connect($s,$u,$p,$bd);

    $sql = " ALTER TABLE `ventas` ADD PRIMARY KEY (`id`)";

    mysqli_query($conexion,$sql);

    mysqli_close($conexion);

?>