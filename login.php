<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login.css">
        <title>Atl Systems</title>
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="controlador/iniciarsesion.php" method="POST">
                        <h2>ATLSYSTEMS</h2>
                        <hr>
                        <?php
                            if(isset($_GET['error'])){
                                ?>
                                <p class="error">
                                    <?php
                                    echo $_GET['error']
                                    ?>
                                </p>
                        <?php
                            }
                        ?>
                        <hr>
                        <div class="inputbox">
                            <ion-icon name="person-outline"></ion-icon>
                            <input type="user" required name="Usuario">
                            <label for="">Usuario</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" required name="Pass">
                            <label for="">Contraseña</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Recuerdame</label>
                        </div>
                        <button>Iniciar</button>
                    </form>
                </div>
                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            </div>
        </section>
    </body>
</html>