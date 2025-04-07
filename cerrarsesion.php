<?php
    session_start();//Inicia sesion
    session_destroy();//Destruye la sesion

    header("Location: ../login.php"); //Redirecciona al login
    exit();
?>