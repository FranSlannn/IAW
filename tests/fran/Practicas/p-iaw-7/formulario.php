
 
    <?php

/* 
Crear un Script php que use un FORMULARIO.

        El formulario debe tener dos imputs numéricos (input_a) (input_b)
        El formulario debe tener un botn submit con el valor "Sumar"
        El formulario debe tener un action que redirija a la misma página donde esté el form
        Una vez enviado el formulario se debe validar que los dos valores que vienen de input_a e input_b no son vacíos
        Una vez enviado y validado el formulario debe mostrar el siguiente texto.
        "El valor de la suma de (valor de input_a) + (valor de input_b) es igual  a (resultado de la suma)"
        Añadir los botones "Restar", "Multiplicar", "Dividir" y mostrar los resultados.
        Dependiendo del botón que se pulse se debe hacer una operación u otra

Usa un html para la salida del script

    */
    $errores = [];
    // Control de errores
    
    if (isset($_POST['sumar'])){

        if($_POST['input_a'] == ""){
            $errores['input_a'] = "campo requerido";
          }
          
        if($_POST['input_b'] == ""){
             $errores['input_b'] = "campo requerido";
              } 
        }

        if ($sumar= $_POST['input_a'] + $_POST['input_b']){
                echo "El valor de la suma de ". $_POST['input_a']. "+" . $_POST['input_b'] . " es igual  a $sumar" .<br>; 
        }
        if ($restar= $_POST['input_a'] - $_POST['input_b']){
                echo "El valor de la resta de ". $_POST['input_a']. "-" . $_POST['input_b'] . " es igual  a $restar" .<br>;  
        }
        if ($dividir= $_POST['input_a'] / $_POST['input_b']){
                echo "El valor de la division de ". $_POST['input_a']. "/" . $_POST['input_b'] . " es igual  a $dividir" .<br>;  
        }
            
             
              
              

    ?>