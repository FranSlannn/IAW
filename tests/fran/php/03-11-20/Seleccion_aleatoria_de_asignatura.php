



<?php

//Array. Seleccion aleatoria de asignatura


$asignaturas=array("iaw","seguridad","bases","sistemas","empresa");
$random_keys=array_rand($asignaturas,3);
echo $asignaturas[$random_keys[0]]."<br>";
echo $asignaturas[$random_keys[1]]."<br>";
echo $asignaturas[$random_keys[2]];

$profesores=array("Fidel","Florindo","Javier","Marisol","Roberto");
$random_keys=array_rand($profesores,3);
echo $profesores[$random_keys[0]]."<br>";
echo $profesores[$random_keys[1]]."<br>";
echo $profesores[$random_keys[2]];

?> 