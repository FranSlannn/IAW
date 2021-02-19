<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "prueba";
$username = "fran";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS `prueba`;";
$resultado = $conn->query($sql);

if (!$resultado) {
    die("Error al crear base de datos");
}

mysqli_close($conn);

header("Location:home.php");

