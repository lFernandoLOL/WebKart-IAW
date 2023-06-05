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
    if (!empty($_SESSION['carrito'])) {
        $idUsuario = $_SESSION['ID_Usuario'];

        $fecha = date('Y-m-d');
        // Crear el pedido en la base de datos
        $pedidoId = $oDAO->crearPedido($fecha, $idUsuario);

        foreach ($_SESSION['carrito'] as $productoId) {
            $cantidad = 1;
            $oDAO->guardarProductoPedido($pedidoId, $productoId, $cantidad);
        }

        $_SESSION['carrito'] = array();

        //página de ver pedidos
        $this->MostrarPedidoID();
    } else {
        
    }

    $oDAO = null;


    }

public function GetproductsByPedido() {
    require_once ("models/pedidos.php");
    $oDAO=new pedidoDAO();
    
    
}




public function MostrarPedidoID() {
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['username'])) {
        header("Location: index.php?controller=UserController&action=iniciosesion");
        exit();
    }

    $userID = $_SESSION["ID_Usuario"];

    // Crear una instancia del modelo Pedido
    include_once("models/pedidos.php");
    $pedido = new pedidoDAO();

    // Obtener los pedidos del usuario
    $misPedidos = $pedido->getPedidosByUserID($userID);

    View::show("vermispedidos", $misPedidos);
    
    exit();
}


}
?>