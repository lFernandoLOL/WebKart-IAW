
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




    }
?>