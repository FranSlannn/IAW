
 
    <?php

/* 

Crea archivo php llamado tablasmultiplicar.php

Este archivo debe de contener un formulario donde con una entrada numérca del 1 al 9, el label de esta entrada debe ser, tabla de multiplicar

Una vez introducido el valor el formulario debe pintar en la misma página la tabla de multiplicar del valor introducido.

Recuerda usar solo un archivo php tanto para pintar el formulario como para el resultado de las tablas de multiplicar

Se debe validar que el valor de entrada sea requerido, numérico y entre 1 y 9, ambos inclusive

Se valora el uso de funciones en el formulario


    */
    ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html>
    <head>
       <title>Tablas de multiplicar.</title> 
    </head>
    <body>
    <h1>Tablas de multiplicar</h1>
    <h3>Escribe un número del 1 al 9 y yo te diré la tabla de multiplicar.</h3>
    <form action="#" method="post">
       <p>Escribe aquí el número: <input type="text" name="num" maxlength="1" size="1" /></p>
       <p><input type="submit" value="Ver tabla de multiplicar." /></p>
    </form>
    
    <?php  
    $n=$_POST['num'];
    if ($n<1 or $n>9) {
        echo "no has escrito un nųmero entre el 1 y el 9.";
        }
    else {
         echo "<h4>Tabla del $n:</h4>";
         $i=1;
         while ($i<=10) {
               echo "$n x $i = ".$n*$i."<br/>";
               $i++;
               } 
         }
    ?>
    </body>
    </html>
    

  
 
   