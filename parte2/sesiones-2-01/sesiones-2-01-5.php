<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-3.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario en dos pasos (Resultado).
    Sesiones (2). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario en dos pasos (Resultado)</h1>

<?php

echo "El nombre introducido es: ". $_SESSION['nombre']."<br>";
echo "Los apellidos introducidos son: ". $_SESSION['apellidos']; 

?>


  <p><a href="sesiones-2-01-1.php">Volver al principio.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
