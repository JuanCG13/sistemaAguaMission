<?php
    $s = 'localhost';
    $u = 'root';
    $p = '';
    $bd = 'aguabd';

    $conexion = mysqli_connect($s,$u,$p,$bd);

    $sql = "ALTER TABLE `ventas` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1";

    mysqli_query($conexion,$sql);

    mysqli_close($conexion);

?>