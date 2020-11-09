<?php

/* Ejercicio 1: ejercicio1.php
   * Formulario simple con los siguientes campos
   * Nombre de la fiesta (text), 
   * Numero de personas (number), 
   * radio input para indicar si la fiesta es privada o no
   * Usa un Select para el Tipo de musica para indicar ("POP, ROCK, JAZZ, INDIE")
   * Usa input Checkbox para indicar los espacios donde con los que cuenta la fiesta ("barras", "escenarios", "jardin", "zona chill",  etc)
   * Usa Textarea para otros comentarios de interes
   * Boton submit con el nombre Enviar
   * Mostrar los resultados en otra pagina ejercicio1post.php
    */

    ?>

<h2>Formulario fiesta:</h2>
<form name="formularioDatos" method="post" action="ejercicio1post.php">
    Nombre de la fiesta:
      <input type="text" name="nombre" maxlength="50"><br><br>
    Numero de personas:
      <input type="number" name="numero_personas"><br><br>    
    Fiesta privada:
      <input type="radio" name="privada" value="si">Si</input>
      <input type="radio" name="privada" value="no">No</input><br><br>
    Tipo de musica: <br>   
      <select multiple name="musica">    
      <option value="POP">POP</option>    
      <option value="ROCK">ROCK</option>    
      <option value="JAZZ">JAZZ</option>    
      <option value="INDIE">INDIE</option>  
      </select><br><br>  
    Espacios:
      <input type="checkbox" name="espacios[]" value="Barras" checked="checked">Barras</input>
      <input type="checkbox" name="espacios[]" value="Escenarios">Escenarios</input>
      <input type="checkbox" name="espacios[]" value="Jardin">jardin</input>
      <input type="checkbox" name="espacios[]" value="Zona_chill">Zona chill</input><br><br>
    Comentarios:
      <textarea rows="6" cols="40" name="comentarios"></textarea>
      <br><br>  
    <!--Botón de enviar-->
      <input type="submit" name="submit" value="Enviar"></input>
      <br><br>  
</form>
</body>
</html>