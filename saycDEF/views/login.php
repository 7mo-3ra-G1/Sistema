<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Ingreso</title>
<style>
  body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #424530; /* Cambio de color */
}

.login-box {
  background-color: #E09132;
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  width: 350px;
  text-align: center;
}

.login-box h2 {
  margin-bottom: 60px;
}

.login-input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #E09132; /* Cambio de color */
  border-radius: 5px;
}

.login-button {
  background-color: #7475a5; /* Cambio de color */
  color: #fff;
  border: 1px solid #E09132; /* Cambio de color */
  border-radius: 5px;
  padding: 10px 20px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.login-button:hover {
  background-color: #E09132; /* Cambio de color */
  color: #fff;
}

</style>
</head>
<body>
  <div class="login-box">
    <h2>Formulario de Ingreso</h2>
    <form method="post" action="login.php">
      <input class="login-input" type="text" name="user" placeholder="Usuario" required>
      <input class="login-input" type="password" name="pass" placeholder="Contraseña" required>
      <button class="login-button" type="submit" name="btn_login">Ingresar</button>
    </form>
  </div>
</body>
</html>