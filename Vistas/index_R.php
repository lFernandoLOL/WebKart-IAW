<?php
// Inicializamos la variable de errores a false
$errores = false;
$mensaje_error = "";

// Comprobamos si se ha enviado el formulario
if (isset($_POST["submit"]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recuperamos los valores enviados por el formulario
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  // Validamos los campos del formulario
  if (empty($nombres)) {
    $errores = true;
    $mensaje_error .= "Por favor ingrese su nombre.<br>";
  }

  if (empty($apellidos)) {
    $errores = true;
    $mensaje_error .= "Por favor ingrese sus apellidos.<br>";
  }

  if (empty($correo)) {
    $errores = true;
    $mensaje_error .= "Por favor ingrese un correo válido.<br>";
  }

  if (empty($contrasena)) {
    $errores = true;
    $mensaje_error .= "Por favor ingrese una contraseña.<br>";
  }

  // Si no se encontraron errores, se envía el formulario
  if (!$errores) {
    echo "Formulario enviado con éxito.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="registro.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <img src="img/mario.png" class="avatar" alt="Avatar Image">
    <h4>Formulario Registro</h4>
    <form method="post" action="">
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
      <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su Contraseña" required>

      <input class="botons" type="submit" name="submit" value="Registrar">
    </form>
    <p><a href="index_L.php">¿Ya tengo Cuenta?</a></p>
  </section>
</body>
</html>
