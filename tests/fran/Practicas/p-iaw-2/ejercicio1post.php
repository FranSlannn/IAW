<HTML>
  <BODY>
    <?php
      echo "El nombre de la fiesta es: ".$_POST['nombre']. " </br>";
      echo "La cantidad de personas son: ".$_POST['numero_personas']. " </br>";
      echo "La fiesta es privada: ".$_POST['privada']. " </br>";
      echo "El tipo de musica elegido es: ".$_POST['musica']. " </br>";
      echo "Los espacios elegidos son: ".$_POST['espacios[]']. " </br>";
      echo "Comentarios: ".$_POST['comentarios']. " </br>";
      ?>