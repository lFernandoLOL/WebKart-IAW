<?php
#include ("Vistas/View.php");


class OrderController{

public function mostrarPedido(){
    require_once ("models/pedidos.php");
    $oDAO=new pedidoDAO();
    $pedidos=$oDAO->GetPedidos();
    $oDAO=null;
    View::show("verpedidos", $pedidos);

}



public function hacerPedido(){
    require_once ("models/pedidos.php");
    $oDAO=new pedidoDAO();

}

public function GetproductsByPedido() {
    require_once ("models/pedidos.php");
    $oDAO=new pedidoDAO();
    
}

}
?>