<?php

include 'requeri.php';

$conexion=mysqli_connect('localhost','root','','estadias');

if (isset($_REQUEST['ingresar'])) {
    $nombre=$_POST['nombre'];
    $fecha=$_POST['fecha'];

    $consulta="INSERT INTO requerimientos (nombre,fecha) VALUES('$nombre','$fecha')";
    $ejecutar=mysqli_query($conexion,$consulta);

    if ($ejecutar) {
        header("refresh:3;url=requeri.php");
    }else{
        echo '<script> alert("Error al registrar") location.href="requeri.php" </script>';
    }
}

?>