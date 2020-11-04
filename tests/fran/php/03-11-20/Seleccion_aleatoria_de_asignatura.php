



<?php

//Array. Seleccion aleatoria de asignatura


$asignaturas=array("iaw","seguridad","bases","sistemas","empresa");

$profesores=array("Fidel","Florindo","Javier","Marisol","Roberto");


echo "<p>El profesor <b>".getRandomArray($profesores). "</b> imparte la asignatura de <b>".getRandomArray($asignaturas)."</b>";

?> 