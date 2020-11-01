<!DOCTYPE html>
<html lang="sp">
	
<?php 
 ?>
   <style type="text/css">
      body{
            background-color:#f5f5f5;   
            max-width: 700px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;            
        }
        h1{
            color: #6c2eb9;
            font-weight: normal;
            font-size: 40px;
            font-family: Arial;
            text-transform: uppercase;  
        }
        h2 {
            color: #3c1b66;
            font-weight: normal;
            font-size: 30px;
            font-family: Arial;
            text-transform: uppercase;
            }

</style>

<head>
    <title>Presentacion personal</title>
</head>

<body>
  <?php
  $Nombre = "Francisco ";
  $Apellidos = "Ortega Gonzalez";
  $Edad = 36;
  $Foto = 
  $Curso1 = "Bachiller";
  $Curso2 = "Administracion de sistemas informaticos y redes";
  
  echo "<h1> Presentacion Personal </h1> <br>";

  echo " <b>Nombre:</b> $Nombre <br>";
  echo " <b>Apellidos:</b> $Apellidos <br>";
  echo " <b>Edad:</b> $Edad <br>";
  echo " <b>Foto:</b> <br>";

  echo "<h2>Estudios</h2><br>";
  echo  "- $Curso1 <br>";
  echo  "- $Curso2 <br>";

  



 
  

  


?>

</body>