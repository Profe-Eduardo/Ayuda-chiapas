<?php
    $host = "localhost"; /*Esto es donde esta el host y aqui ira la ip donde este la BD */
    $user = "root"; /* Este es el usuario para entrar a la BD */
    $pass = ""; /*Aqui va la contraseña para entrar a la BD por ahora solo estara en blanco */

    $db = "atltech"; /*Este es el nombre de la BD donde se guardara los datos para el login */

    $conexion = mysqli_connect($host,$user,$pass,$db); /*Esto es la conexion a la BD */

    /*IMPORTANTE*/
    /*Las siguientes lineas es para validar la conexion*/ 
    if(!$conexion){
        echo "Conexcion Fallida";
    }
    /*Fin de la comprovacion de la conexion */
?>