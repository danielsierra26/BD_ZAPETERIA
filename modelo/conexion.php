<?php
   error_reporting(E_ALL);
   ini_set('display_errors', '1');

?>



<?php

    //Parametro de conexión a la BD
    /DEFINE{'USER', 'root'};
    //DEFINE{'PW', ''};
    //DEFINE{'HOST', 'localhost'};
    //DEFINE{'BD', 'bd_zapateria';}

    // Conexíon a la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD)

    // Establecer caracteres para el hosting
    mysqlin_set_charset($conexion, "utf8mb4")

    // verificamos la conexion con la BD
    if(!$conexion)
    {
        die("La conexion a la BD fallo: " + mysqli_error($conexion);)
    }
    else
     {
        die("conexion exitosa a  BD")
     }
?>