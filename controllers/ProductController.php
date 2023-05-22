<?php
/**
 *  Controlador de Productos. Implementará todas las acciones que se puedan llevar a cabo desde las vistas
 * que afecten a productos de la tienda.
 */
include ("Vistas/View.php");
class ProductController {

    /*
      Método que obtiene todos los productos de la BBDD y los muestra a través de la vista showProducts.
     */
    public function GetAllProducts (){
        require_once ("models/productos.php");
        $pDAO=new ProductoDAO();
        $products=$pDAO->GetAllProducts();
        $pDAO=null;
        View::show("showProducts", $products);
    }

    /*
      Metodo mediante el cual se obtiene un producto de la base de datos buscandolo por su Identificador que obtendremos mediante el metodo GET.
     */
    public function ProductByID (){
        if (isset($_GET['id'])){
            require_once ("models/productos.php");
            $pDAO=new ProductoDAO();
            $products=$pDAO->GetProductById($_GET['id']);
            $pDAO=null;
            View::show("ProductById", $products);
        }

    }
    
    public function guardarProducto()
    {
        // Verificar si el formulario se ha enviado
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Obtener los datos del formulario
            $nombre_prod = $_POST["nombre_prod"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
      
            // Crear una instancia de la clase productoDAO para interactuar con la base de datos
            require_once("models/productos.php");
            $pDAO = new productoDAO();
    
            // Llamar al método guardaProducto de productoDAO para insertar el nuevo producto
            $pDAO->guardaProducto($nombre_prod, $descripcion, $precio);
            
            // Redireccionar a la página de mostrar todos los productos
            /* $products=$pDAO->GetAllProducts();
            $pDAO=null;
            var_dump($products);
            View::show("showProducts", $products);
            */
            $pDAO=null;
            $this->GetAllProducts();
            
    }else{
        View::show("addProduct", null);
    }
    }
















    
    public function addCarrito(){
        if (isset($_GET['id_product'])){
            array_push($_SESSION['carrito'],$_GET['id_product']);  
            include_once 'models/productos.php';    
            $pDAO=new ProductoDAO();
            $products=$pDAO->getAllProducts();
            $pDAO=null;
            View::show("showProducts", $products);
        }
    }

    /*
    Metodo que recorre nuestro array $_SESSION['carrito'] y va guardando las IDs de los productos del carrito en un nuevo array.
    */
    public function verCarrito(){
        include_once 'models/productos.php';
        $pDAO=new ProductoDAO();
        $arrayCarrito= array();
        foreach($_SESSION['carrito'] as $posicion => $id){
            $producto=$pDAO-> getProductById($id);
            array_push($arrayCarrito,$producto);
        }
        View::show("elcarrito", $arrayCarrito);
    }
    

}



    
?>