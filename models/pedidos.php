<?php
include_once 'db/db.php';


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


   public function getPedidoByID(){


  }

/*
  public function hacerPedido(){
    $stmt=$this->bd_conn->prepare("Insert into pedidos");
  }
*/

}
?>