<?php

include("conexion.php");
$con=conectar();

$id_Usuario=$_POST['id_Usuario'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="UPDATE usuario SET  Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono' WHERE id_Usuario='$id_Usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>