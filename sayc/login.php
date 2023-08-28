<?php
    include("conex.php");
    session_start();
    if (!empty($_POST['btn_login'])) {
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario=? AND clave=?");
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $datos = $result->fetch_object();
                header("Location: ../view/mapa.html");
                $_SESSION['usuario'] = $datos->usuario;
            } else {
                echo "Usuario o Contraseña Incorrectos";
            }

            $stmt->close();
        } else {
            echo "Campos Vacios";
        }
    }
    if (empty($_SESSION['gmail'])) {
        header("Location: ../view/login.html");
    }
?>
