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


$dado1 = rand(1,6);
$dado2 = rand(1,6);
$dado3 = rand(1,6);

$_SESSION['dado1'] = $dado1;
$_SESSION['dado2'] = $dado2;
$_SESSION['dado3'] = $dado3;


 



$suma = $dado1 + $dado2 + $dado3;
/*
$meses = array("lunes","martes","miercoles","jueves","viernes");

foreach ($meses as $mes) {
  echo $mes ."<br>";
}

$num1 = array(1,2,3,4,5,6);

 $p=min($num1);
 $m=max($num1);


/*foreach ($dado as $numero) {
  echo $numero ."<br>";
}

echo rand($p,$m);

/*
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
  */

?>







<img src="img/<?php echo $dado1?>.svg">
<img src="img/<?php echo $dado2?>.svg">
<img src="img/<?php echo $dado3?>.svg">

<p> la suma de los dados es : <?php echo  $suma ?></p>
<p><a href="tirada-dados-1.php">Volver a tirar</a></p>
<p><a href="tirada-dados-2.php">ir a la pagina 2</a></p>

<form action="tirada-dados-2.php" method="post">
<input type="hidden" name="dado1" value="<?php echo $dados1; ?>">
<input type="hidden" name="dado2" value="<?php echo $dados2; ?>">
<input type="hidden" name="dado3" value="<?php echo $dados3; ?>">
<input type="submit" name="enviar" value="tirada con el form">
</form>


<footer>
  <p>Fran</p>
</footer>
</body>
</html>
