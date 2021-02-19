<?php
/**
 * Suma o resta- suma-resta-1.php
 *
 * @author Escriba aquí su nombre
 *
 */
session_start();
print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Suma o resta. Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
  <style>
  button { background-color: white; padding: 0; border: none;}
  </style>
</head>

<body>
  <h1>Suma o resta</h1>

  <p>Haga clic en uno de los botones para tirar un dado y añadirlo al total.</p>

  <form action="suma-resta-2.php" method="post">
    <p>
      <input type="submit" name="accion" value="Añadir">
      <input type="submit" name="accion" value="Restar">
      <input type="hidden" name="dado">
    </p>

<?php

$dado = rand(1,6);

$_SESSION['dado'] = $dado;
$añadir = $total + $dado;
$restar = $total - $dado;
$total = 0 + $dado;

echo "añadir: " . $añadir . "<br>";
echo "restar: " . $restar;
/*
if (isset($_SESSION['restar'])) {
 if ($_SESSION['restar']) > ($_SESSION['total']) {
  print ?><p><img src="img/0.svg></p><?php
 }
}
*/




?>

<p><img src="img/<?php echo $dado ?>.svg" alt="4" width="140" height="140"></p>

<p>Total: <?php echo $total ?></p>

  </form>

  <footer>
    <p>Fran</p>
  </footer>
</body>
</html>
