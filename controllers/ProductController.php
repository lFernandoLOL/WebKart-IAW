
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
            header("Location: index.php?controller=ProductController&action=GetAllProducts");
            
            exit();

        } else {
            View::show("addProduct", null);
        }
    }
    

    // ...
}



    
?>