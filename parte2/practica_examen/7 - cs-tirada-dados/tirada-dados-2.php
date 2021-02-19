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
session_start();


$dado1 = $_SESSION['dado1'];
$dado2 = $_SESSION['dado2'];
$dado3 = $_SESSION['dado3'];
 

$suma = $dado1 + $dado2 + $dado3;


?>

<p>  
  
  <img src=<?php echo "img/".$dado1.".svg"; ?>>
  <img src=<?php echo "img/".$dado2.".svg"; ?>>
  <img src=<?php echo "img/".$dado3.".svg"; ?>>
  
  <form action="tirada-dados-2.php">


<p> la suma de los dados es : <?php echo  $suma ?></p>
<p><a href="tirada-dados-1.php">Volver a tirar</a></p>


<footer>
  <p>Fran</p>
</footer>
</body>
</html>
