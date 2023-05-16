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
    }


?>