<?php

$usuario_correcto = "parzibyte";
$palabra_secreta_correcta = "hunter2";
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
  
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: Caja.php");
} else {
    echo "El usuario o la contraseña son incorrectos";
}