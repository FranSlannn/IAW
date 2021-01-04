<?php


/*
Escriba un programa de dos páginas que solicite un texto al usuario y lo muestre en las dos páginas.

En la primera página, se solicita un texto del usuario.
En la segunda página, se dice si se ha escrito o no texto en el formulario. Se pueden escribir letras o números, una o varias palabras.
Al volver a la primera página, se mostrará el último texto escrito
*/


// Se accede a la sesión 5
session_name("10 - Sesiones PHP-01");
session_start();
?>

<body>
  <h1>Formulario 1 (Formulario)</h1>

  <form action="10 - Sesiones PHP-01.php" method="get">
    <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>

    <p>
      <input type="submit" value="Comprobar">
      <input type="reset" value="Borrar">
    </p>
  </form>
  </body>
  

<?php
// Si hay un texto guardado en la sesión,
if (isset($_SESSION["texto"])) {
    // se muestra
    print "  <p>El texto es: <strong>$_SESSION[texto]</strong>.</p>\n";
    print "\n";
}
?>
