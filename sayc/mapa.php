<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['usuario'])) {
            echo "<h1>Bienvenido, " . $_SESSION['usuario'] . "!</h1>";
            echo "<form action='logout.php' method='post'>";
            echo "<input type='submit' value='Cerrar Sesión'>";
            echo "</form>";
        } else {
            echo "<center>";
            echo "<p>No tienes permiso para acceder a esta página.</p>";
            echo "<p><a href='../view/login.html'>Iniciar sesión</a></p>";
            echo "</center>";
        }
    ?>
</body>
</html>
