<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'cloud';

$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $bd,
);



?>