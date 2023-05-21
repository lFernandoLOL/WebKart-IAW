<?php
session_start();
include_once '../db/db.php';
$db = new Database();
$conn = $db->connect();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Realizar validación de las credenciales
  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = :correo");
  $stmt->bindParam(':correo', $username);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
  // Verificar si se encontró un usuario con el correo proporcionado
  if ($user) {
    // Verificar la contraseña
    if (password_verify($password, $user['contraseña'])) {
      // Las credenciales son válidas, iniciar sesión
      $_SESSION['user_id'] = $user['id'];
  
      // Redirigir al usuario a la página de inicio o a cualquier otra página autenticada
      header('Location: ../index.php');
      exit;
    } else {
      // Contraseña incorrecta
      $error_message = "Contraseña incorrecta";
    }
  } else {
    // No se encontró un usuario con el correo proporcionado
    $error_message = "Correo no registrado";
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Kart</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <div class="login-box">
      <img style="border: 3px solid; color: #b80f22;" src="img/prueba.png" class="avatar" alt="Avatar Image">
      <h1>Inicio sesión</h1>
      <form method="POST" action="">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" name="username" placeholder="Introduzca el usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Introduzca la contraseña">
        <input type="submit" value="Iniciar sesión">
        <?php if(isset($error_message)) { ?>
          <p><?php echo $error_message; ?></p>
        <?php } ?>
        <a href="#">¿No te acuerdas de la contraseña?</a><br>
        <a href="index_R.php">¿Aún sin cuenta? Regístrate</a>
      </form>
    </div>
  </body>
</html>