<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();

$_SESSION['errorapellidos'] = "";

if(isset($_POST['apellidos'])){
    if($_POST['apellidos'] == ""){
        $_SESSION['errorapellidos'] = "Los apellidos son obligatorios";
    }

}
  

if ($_SESSION['errorapellidos'] != ""){
    # form y nombre mal,guardo en sesion y voy a la pagina 3
    header("Location:sesiones-2-01-3.php");
}else {
    # form y nombre ok,guardo en sesion y voy a la pagina 5
    $_SESSION['apellidos'] = $_POST['apellidos'];
    header("Location:sesiones-2-01-5.php");
}

?>