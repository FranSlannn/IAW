<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tres cuadrados.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>

  <p>Actualice la página para mostrar tres nuevos cuadrados.</p>

<?php


$c1    = rand(50, 150);
$c2    = rand(50, 150);
$c3    = rand(50, 150);
$ancho = $c1 + $c2 + $c3 + 20;
$alto  = max($c1, $c2, $c3) + 20;

print "  <p>";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"\n";
print "      width=\"$ancho\" height=\"$alto\" viewBox=\"-10 -10 $ancho $alto\" style=\"background-color: white;\" font-family=\"sans-serif\">\n";
print "      <rect x=\"0\" y=\"0\" width=\"$c1\" height=\"$c1\" fill=\"red\" />\n";
print "      <rect x=\"$c1\" y=\"0\" width=\"$c2\" height=\"$c2\" fill=\"green\" />\n";
print "      <rect x=\"" . ($c1+$c2) . "\" y=\"0\" width=\"$c3\" height=\"$c3\" fill=\"blue\" />\n";
print "    </svg>\n";
print "  </p>";
?>



  
</body>
</html>
