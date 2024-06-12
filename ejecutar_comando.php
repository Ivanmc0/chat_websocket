<?php
// Ruta al archivo que deseas ejecutar
$ruta = 'bin/server.php';

// Comando para ejecutar el servidor PHP
$comando = "php $ruta > /dev/null 2>&1 &";

// Ejecuta el comando
shell_exec($comando);

echo "El servidor PHP ha sido iniciado.";
?>