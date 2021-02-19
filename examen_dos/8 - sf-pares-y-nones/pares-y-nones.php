<?php
/**
 * Pares y nones - pares-y-nones.php
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
    Pares y nones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Pares y nones</h1>

  <p>Actualice la página para mostrar otra partida.</p>

  <table>
    <tr>
      <th colspan="2">Jugador 1<br>
        (pares)</th>
      <th colspan="2">Jugador 2<br>
        (nones)</th>
    </tr>

    

    
<?php



$mano1 = rand(0,5);
$mano2 = rand(0,5);

$numero = $mano1 + $mano2;





?>
<tr>      
      <th colspan="2"><img src="img/<?php echo $mano1 ?>.svg" alt="4" width="140" height="140"></th>
      <th colspan="2"><img src="img/<?php echo $mano2 ?>.svg" alt="4" width="140" height="140"></th>
    </tr>

    <tr>
     
    

  </table>
  <?php
  if($numero%2 == 0){
  echo "<br> El ".$numero." es numero par, gano el jugador 1 <br>";
  ?><th colspan="2">Jugador 1<img src="img/gana.svg" alt="4" width="140" height="140"></th>
  Jugador 2 <img src="img/pierde.svg" alt="4" width="140" height="140">
  <?php
  
  
}else{
  echo "<br> El ".$numero." es número impar, gano el jugador 2  <br>";
  ?><th colspan="2">Jugador 1<img src="img/pierde.svg" alt="4" width="140" height="140"></th>
  Jugador 2 <img src="img/gana.svg" alt="4" width="140" height="140">
  <?php  
}
?>
</tr>

<br><br>

  <a href="pares-y-nones.php">Volver a jugar</a></br>
  <a href="pares-y-nones.php?reset=true">Reiniciar partida</a>

  <footer>
    <p>Fran</p>
  </footer>
</body>
</html>