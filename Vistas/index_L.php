

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Kart</title>
    <style>
      
body {
  margin: 0;
  padding: 0;
  background: url(Vistas/img/bg.png) no-repeat;
  background-size: cover;
  font-family: sans-serif;
  width: 100pc;

  
}

.login-box {
  width: 320px;
  height: 420px;
  background: #000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: 34%;
}

.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  background: #b80f22;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="submit"]:hover {
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

.login-box a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

    </style>
    <!-- <link rel="stylesheet" href="login.css">-->
  </head>
  <body>

    <div class="login-box">
      <img style="border: 3px solid; color: #b80f22;" src="Vistas/img/prueba.png" class="avatar" alt="Avatar Image">
      <h1>Inicio sesión</h1>
      <form action="index.php?controller=UserController&action=iniciosesion" method="POST">
        <!-- CORREO -->
        <label for="usuario">Correo</label>
        <input type="text" name="username" placeholder="Introduzca el correo">
        <!-- PASSWORD -->
        <label for="contrasena">Contraseña</label>
        <input type="password" name="password" placeholder="Introduzca la contraseña">
        <input type="submit" value="iniciarsesion">
        <a href="#">¿No te acuerdas de la contraseña?</a><br>
        <a href="index.php?controller=UserController&action=registro">¿Aún sin cuenta? Regístrate</a>
      </form>
    </div>
  </body>
</html>