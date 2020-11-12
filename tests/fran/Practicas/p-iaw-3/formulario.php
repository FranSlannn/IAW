<HTML>
<head>
        <title>Ejercicio</title>
    </head>
<BODY>
    <?php

/* 

Copia los archivos que has realizado en la tarea 2 (p-iaw-2)

Añade la siguiente validación al formulario.

    Nombre de la fiesta: No puede ser vacío.
    Usa un Select para el Tipo de musica para indicar ("POP, ROCK, JAZZ, INDIE"): No puede ser vacío
    Usa input Checkbox para indicar los espacios donde con los que cuenta la fiesta ("barras", "escenarios",
     "jardin", "zona chill",  etc). Debe seleccionar 2 zonas como mínimo


Recuerda que al validar formulario el action del form debe ser el mismo php donde esté el fomulario, en este caso ejercicio1.php.
 En este archivo es donde se deben hacer todas las comprobaciones y mostrar los resultados.
 var_dump($errores);die();
    */


    
    
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
    

       
    <h2>Formulario fiesta:</h2>    
<form method="POST" action="formulario.php">
<?php

if($_POST['nombre'] == ""){
  $errores['nombre'] = "El nombre es requerido";

  ?>

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
      <input type="checkbox" name="espacios" value="Barras">Barras</input>
      <input type="checkbox" name="espacios" value="Escenarios">Escenarios</input>
      <input type="checkbox" name="espacios" value="Jardin">jardin</input>
      <input type="checkbox" name="espacios" value="Zona_chill">Zona chill</input><br><br>
    Comentarios:
      <textarea rows="6" cols="40" name="comentarios"></textarea>
      <br><br>  
    <!--Botón de enviar-->
      <input type="submit" name="submit" value="Enviar"></input>
      
</form>
<?php 
 }
 ?>
</body>
</HTML>