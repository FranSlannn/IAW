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
$sql = "UPDATE `prueba`.`pregunta` SET `name`=' 22222' WHERE `id`=1;";
$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla_pregunta'] = true;
}else{
    $_SESSION['crear_tabla_pregunta'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");


