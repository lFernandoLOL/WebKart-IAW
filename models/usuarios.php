<?php
require_once 'db/db.php';

class UsuarioDAO{
    public $db_con;
    public function __construct(){
        $this->db_con=Database::connect();
    }

    // Metodo que toma los valores que hay en la tabla Users de la base de datos

    public function getUsers($username, $password) {
        $stmt = $this->db_con->prepare("SELECT * FROM Usuarios WHERE Correo = :username AND Contraseña = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!empty($result)) {
            // El usuario existe en la base de datos si $result esta lleno
            return true;
        } else {
            // El usuario no existe o las credenciales son incorrectas si $result esta vacio
            return false;
        }
    }
    
}

?>