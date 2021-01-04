
 
    <?php

/* 
PHP básico - Array

Crear un Script php que use un ARRAY.

-Crear un array con todas las provincias de Castilla y León.
      *Imprimir Las ciudades en el html.
-Crea una función que se llame getProvinciasCYL().
      *La funcion debe devolver un array con las provincias de Castilla y León
crea una variable con el valor que devuelva esta función (array)
Imprimir todas las ciudades en el html usando una lista ordenada de html

Usa un html para la salida del script

    */

    
    ?> 



<html>
	<body>
    <ol>
      <?php
      $provincias = [
          "Avila",
          "Burgos",
          "Leon",
          "Palencia",
          "Salamanca",
          "Segovia",
          "Soria",
          "Valladolid",
          "Zamora"
      ];
          

      for
      foreach( $provincias as $provincia) {    
           
            echo "<li>".$provincia."</li>";
            
        }
        ?> 
        </ol>
    </body>
  </html>