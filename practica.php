<?php

if (empty($_POST['texto'])) {
   echo "hola mundo";
}

$arrayPrueba = array("lunes","martes","miercoles");
echo $arrayPrueba[1];
?>
<!DOCTYPE html>
<html>
	<body>

<form action="practica.php" method="POST">

<p>hola que tal</p>
<input type="text" name="texto" >
<input type="submit" value="boton">


</form>


    </body>
</html> 

