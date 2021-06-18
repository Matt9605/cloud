<?php
include('conexion.php');
$nombre= $POST['nombre'];
$correo= $POST['correo'];
$password= $POST['password'];

$query = "INSERT INTO `usuarios`(`nombre`,`correo`,`password`) VALUES ('$nombre','$correo','$password')";
$result = mysqli_query($conn,$query);

$_SESSION['mensaje'] = "Usuario guardado con exito";

header("Location: index.php");

?>