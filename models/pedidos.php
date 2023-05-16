<?php
include_once 'db/db.php';
/*
$db= new Database();
$conn = $db->connect();


$sql = $conn->prepare("SELECT Nombre_Prod from Productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);
*/

class pedidoDAO{
    public $bd_conn;


    public function __construct() {
        $this->bd_conn=Database::connect();
    }



    public function GetPedidos(){
     $stmt=$this->bd_conn->prepare("Select * from Pedidos");
     $stmt->setFetchMode(PDO::FETCH_ASSOC);

    try{
     $stmt->execute();
    } catch (PDOException $a) {
      echo $a->getMessage();
    }

return $stmt->fetchAll();
}


}
?>