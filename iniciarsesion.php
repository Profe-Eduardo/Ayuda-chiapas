<?php
    session_start();
    include('../conexion/conexion.php'); /*Aqui mandamos a traer la informacion de la conexion */

    if(isset($_POST['Usuario']) && isset($_POST['Pass'])){ /*Esto es donde va a contener el Usuario y contraseña */
        function validate($data){ /*Esta funcion es para validar datos */
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $usuario = validate($_POST['Usuario']); /*Esto es para el if de la linea 5 */
        $contra = validate($_POST['Pass']); /*Esto es para el if de la linea 5 */
        /*El if de la linea 15 hasta 19 esta echo para comprovar que el contenedor de user y pass no esten vacios y si es asi envia un mensaje */
        if(empty($usuario)){
            header("Location: ../login.php?error=Se necesita Usuario");
            exit();
        }elseif(empty($contra)){
            header("Location: ../login.php?error=Se necesita Contraseña");
            exit();
        }else{ /*Esto es para encriptar la contraseñas */
            //$contra = md5($contra);
            $sql = "SELECT * FROM user WHERE Usuario = '$usuario' AND Pass = '$contra' "; /*Aqui mandamos a llamar a la tabla user para validar el usuario y contraseña */
            $result = mysqli_query($conexion,$sql); /*Esto nos tiene que dar como resultado la conexion y la tabla */
            /*El siguiente if es si entra todo bien */
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['Usuario'] === $usuario && $row['Pass'] === $contra){ /*Esto es para comparar y validar lo que esta en Usuario y Contra BD y Usuario y Contra HTML */
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                    $_SESSION['ID'] = $row['ID'];
                    /*Si todos los $_SESSION son correctos me manda a el inicio */
                    header("Location: ../user.php");
                    exit();
                }else{ /*Sino se queda en la misma pagina y manda mensaje de error */
                    header("Location: ../login.php?error=El Usuario o la contraseña estan mal");
                    exit();
                }
            }else{
                header("Location: ../login.php?error=El Usuario o la contraseña estan mal");
                exit();
            }
        }


    }else{
        header("Location: ../login.php");
        exit();
    }
?>