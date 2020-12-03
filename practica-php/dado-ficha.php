<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1 y 6,
 * al azar, y coloque la ficha en la posición correspondiente.
 *
 * La posición de la ficha cx depende del valor obtenido en el dado:
 * La posición se puede calcular a partir del valor del dado mediante la fórmula: $posicion = 100 * $dado - 50
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
    Avance de ficha.
    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>

  
  <form method="POST" action="dado-ficha.php" enctype='multipart/form-data'>
  
   <input name="numero" type="number" min=1 max=6  required="required"><br>  


<input type="submit" value="enviar">
</form> 



<?php


$errores = [];
// Control de errores

if (isset($_POST['enviar'])){

    if($_POST['enviar'] == ""){
        $errores['enviar'] = "campo requerido";
      }
    }


$dado = $_POST['numero'];
$imagsrc1 = "img/".$dado.".svg";
$imagsrc2 = "img/c".$dado.".svg";




?>

<img src="<?php echo $imagsrc1; ?>">
<img src="<?php echo $imagsrc2; ?>">

  
</body>
</html>
