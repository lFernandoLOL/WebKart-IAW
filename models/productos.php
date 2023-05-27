<?php
include_once 'db/db.php';

class productoDAO{
    public $bd_conn;

    public function __construct() {
        $this->bd_conn=Database::connect();
    }



    public function GetAllProducts(){
        $stmt=$this->bd_conn->prepare("Select * from Productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    try{
        $stmt->execute();
    } catch (PDOException $a) {
        echo $a->getMessage();
    }

    return $stmt->fetchAll();
}


    public function GetProductById($id){
        $stmt=$this->bd_conn->prepare("Select * from Productos where ID_Producto=$id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        try {
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }
        

        return $stmt->fetch();
    }


    public function guardaProducto($nombre_prod,$descripcion,$precio){
        $stmt = $this->bd_conn->prepare("INSERT INTO Productos (Nombre_Prod, Descripcion, Precio) VALUES (:nombre_prod, :descripcion, :precio)");

        // Vincular los valores de los parámetros con los datos del formulario
        $stmt->bindParam(':nombre_prod', $nombre_prod);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);

         // Ejecutar la consulta SQL
         try{
            $stmt->execute();
        } catch (PDOException $a) {
            echo $a->getMessage();
        }

         }

    }
    

    
?>