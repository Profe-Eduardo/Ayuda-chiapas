<?
    session_start();
    if(empty($_SESSION['ID'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/menu.css">
        <title>Atl Systems</title>
    </head>
    <body>
        <header class="header"> <!-- El ha linia 15 a 26 es unicamente para la parte superior -->
            <div class="logo">
                <img src="" alt="Logo de la empresa">
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </nav>
            <a href="controlador/cerrarsesion.php" class="btn"><button>Cerrar Sesion</button></a>
        </header>
        <main>
            <div class="izq">
                <h1></h1>
                <a href=""></a>
            </div>
            <div class="der">
                <a href=""></a>
            </div>
        </main>
    </body>
</html>