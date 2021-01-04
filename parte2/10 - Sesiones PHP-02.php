<?php


/*
Escriba un programa de dos páginas que solicite un texto al usuario y lo muestre en las dos páginas.

En la primera página, se solicita un texto del usuario.
En la segunda página, se dice si se ha escrito o no texto en el formulario. Se pueden escribir letras o números, una o varias palabras.
Al volver a la primera página, se mostrará el último texto escrito
*/



// Se accede a la sesión
session_name("10 - Sesiones PHP-01");
session_start();
?>

<!DOCTYPE html>
<body>
  <h1>Formulario 2 (Formulario)</h1>

  <form action="10 - Sesiones PHP-02.php" method="get">
    <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>

    <p>
      <input type="submit" value="Comprobar">
      <input type="reset" value="Borrar">
    </p>
  </form>
  </body>

  <?php
// Funciones auxiliares
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

// Recogemos el texto
$texto   = recoge("texto");
$textoOk = false;

// Comprobamos el texto y escribimos avisos si es necesario
if ($texto == "") {
    print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
} else {
    $textoOk = true;
}

// Si el texto es válido ...
if ($textoOk) {
  // guardamos el texto en la sesión
    $_SESSION["texto"] = $texto;
    // y lo mostramos
    print "  <p>El texto es: <strong>$texto</strong>.</p>\n";
}
?>

    <p><a href="10 - Sesiones PHP-01.php">Volver a la primera página.</a></p>