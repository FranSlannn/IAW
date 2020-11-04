



<?php

//Array. Seleccion aleatoria de asignatura


$asignaturas=array("iaw","seguridad","bases","sistemas","empresa");
$random_keys=array_rand($asignaturas,3);


$profesores=array("Fidel","Florindo","Javier","Marisol","Roberto");
$random_keys=array_rand($profesores,3);

echo "<p>El profesor <b>".getRandomArray($profesores). "</b> imparte la asignatura de <b>".getRandomArray($asignaturas)."</b>";

?> 