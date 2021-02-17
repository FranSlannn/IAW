<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php

$tirada1= rand(1,6);
$tirada2= rand(1,6);
$tirada3= rand(1,6);

$_SESSION["dado1"]=$tirada1;
$_SESSION["dado2"]=$tirada2;
$_SESSION["dado3"]=$tirada3;

print "    <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>

<p>  
  
  <img src=<?php echo "img/".$tirada1.".svg"; ?>>
  <img src=<?php echo "img/".$tirada2.".svg"; ?>>
  <img src=<?php echo "img/".$tirada3.".svg"; ?>>
  la suma 
</p>

<footer>
  <p>Escriba aquí su nombre</p>
</footer>
</body>
</html>
