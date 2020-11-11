<HTML>
  <BODY>
    <?php
      echo "El nombre de la fiesta es: ".$_POST['nombre']. " </br>";
      echo "La cantidad de personas son: ".$_POST['numero_personas']. " </br>";
      echo "La fiesta es privada: ".$_POST['privada']. " </br>";
      echo "El tipo de musica elegido es: ".$_POST['musica']. " </br>";     
      echo "Comentarios: ".$_POST['comentarios']. " </br>";

      if($_POST['espacios']){
        $espacios_elegidos = "";
        foreach ($_POST['espacios'] as $key => $value) {

          // $espacios_elegidos .= $value.", ";
          $espacios_elegidos = $espacios_elegidos.$value.", ";

        }
        echo "Los espacios elegidos son: ".$espacios_elegidos. " </br>";

          }else{
            echo "No ha seleccionado ningun espacio </br>";
      }
     
      ?>