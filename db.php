<?php

//se guarda dentro del servidor.
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud'
);

// Verificar si esta conectada la BD.
// if (isset($conn)){
//     echo ('Base de datos conectada');
// }

?>