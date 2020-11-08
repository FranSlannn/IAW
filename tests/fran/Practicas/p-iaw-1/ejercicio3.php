<?php

/* 

Ejercicio 3: ejercici3.php programa que muestra la fecha actual
Muestra cómo usar comentarios, tablas y funciones (propias y
de biblioteca). También cómo usar el manual de PHP
    */

    $fecha  = date ("j/n/Y H:i");
    print ("$fecha") .  "<BR>";
    
 /* Tabla */   

    $dia = date ("j");
    $mes = date ("n");
    $anio = date ("Y");

    Print ("Hoy es " . $dia . " del " . $mes . " del año " . $anio . "<BR>");


?>
