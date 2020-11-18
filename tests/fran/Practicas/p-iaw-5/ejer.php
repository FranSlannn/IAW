
 
    <?php

/* 

Crear un Script php que use FOR

El script debe pintar 10 dirrecciones de email con terminaciones diferentes del 0 al 9.
Por ejemplo.
Dado mi email florindo.lopdel@educa.jcyl.es.

El script php debe tener como respuesta lo siguiente.

Mi correo es florindo.lopdel0@educa.jcyl.es.
Mi correo es florindo.lopdel2@educa.jcyl.es.
.....
.....
Mi correo es florindo.lopdel9@educa.jcyl.es.

    */

    $email = "florindo.lopde@educa.jcyl.es";

for ($i=0; $i<10 ;$i++) {
  echo str_replace("@",$i."@","Mi correo es ". $email."<br>");
   
}

  

?> 
   