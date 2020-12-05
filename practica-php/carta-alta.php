<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10,
 * al azar, e indique el valor más alto.
 *
 * El valor más alto se puede obtener con la función max().
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
            La carta más alta.
        
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
         
          <p>Actualice la página para mostrar un nuevo trío de cartas.</p>


  <?php
           $carta1 = rand(1, 10);
           $carta2 = rand(1, 10);
           $carta3 = rand(1, 10);

           $carta_alta = max($carta1 , $carta2 , $carta3);
  
                    

          $imagsrc1 = "img/c".$carta1.".svg";
          $imagsrc2 = "img/c".$carta2.".svg";
          $imagsrc3 = "img/c".$carta3.".svg";
          $imagsrcalta = "img/c".$carta_alta.".svg";
 ?>

 
        <img  class="carta" src="<?php echo $imagsrc1; ?>">
        <img  class="carta" src="<?php echo $imagsrc2; ?>">
        <img  class="carta" src="<?php echo $imagsrc3; ?>">
    <br><br>
    la carta mas alta es <br><br>
    <img  class="carta" src= "<?php echo $imagsrcalta; ?>"> 

        
 </body>
 </html>






        
 

