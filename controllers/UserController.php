<?php
include ("Vistas/View2.php");
class UserController{
   

// Metodo que cierra la sesion y te envia de nuevo al login
public function cerrarsesion(){
    session_destroy();
    View2::show2("index_L");
}

public function iniciarsesion(){
    View2::show2("index_L");
}
public function registro(){
    View2::show2("index_R");
}

public function iniciosesion()
    {
        header("Location: index.php");
        // Verificar si se ha enviado el formulario de inicio de sesión
       /* if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtener los datos del formulario
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            // Si la validación y autenticación son exitosas
            include_once('models/productos.php');
            include_once('models/usuarios.php');
            
            //Usar $_SESSION=_$POST['username']?? para el header y tal
            $uDAO=new UsuarioDAO();

            if ($uDAO->getUsers($username, $password) == true) {
                $_SESSION['usuario'] = $username;
                header("Location: index.php");
            } else {
                echo "Usuario o contraseña incorrectos";
            }
            
        }*/
    }

}
    



?>