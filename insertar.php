<?php
include('conexion.php');


//conexion a la base de datos con los datos del usuario 
$con = mysqli_connect($s,$u,$p,$bd);


// aca se realiza la asignacion de las variables del formulario a variables de php 
//pero con una conversion para que se puedan utilizar en mysql
//la conversion se realiza asignando con la funcion de mysqli_real 
//y dentro de la misma funcion se coloca la conexion y la variable post del formulario 
$camion = mysqli_real_escape_string($con,$_POST['idcamion']);
$producto = mysqli_real_escape_string($con,$_POST['productos']);
$precio = mysqli_real_escape_string($con,$_POST['precio']);
$cantidad = mysqli_real_escape_string($con,$_POST['cantidad']);



if ( $con === false)
{
    echo ' no se pudo conectar a la bd ';
}


// se prepara la consulta
$sql = "INSERT INTO ventas (camion,producto,precio,cantidad) VALUES ('$camion','$producto','$precio','$cantidad')";


// se realiza la consulta 
mysqli_query($con,$sql);


// se cierra la conexion a la base de datos 
mysqli_close($con);



// estas condicionales son para indicar 
//a que pagina se va a redirigir despues de guardar los datos en la BD
if($camion === 'camion01')
{
    include('camion01.php');
}
if($camion === 'camion02')
{
    include('camion02.php');
}
if($camion === 'camion03')
{
    include('camion03.php');
}
if($camion === 'camion04')
{
    include('camion04.php');
}




?>