<?php
/*
// Incluir el archivo de conexión a la base de datos
include_once '../db/db.php';

// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // Obtener los datos del formulario
    $nombre_prod = $_POST["nombre_prod"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    // Crear una instancia de la clase Database para establecer la conexión
    $db = new Database();
    $conn = $db->connect();

    // Preparar la consulta SQL para insertar los datos en la tabla Productos
    $stmt = $conn->prepare("INSERT INTO Productos (Nombre_Prod, Descripcion, Precio) VALUES (:nombre_prod, :descripcion, :precio)");

    // Vincular los valores de los parámetros con los datos del formulario
    $stmt->bindParam(':nombre_prod', $nombre_prod);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':precio', $precio);

    // Ejecutar la consulta SQL
    if ($stmt->execute()) {
        // La inserción fue exitosa
        header("Location: index.php?controller=ProductController&action=getAllProducts");
        echo "El producto se ha añadido correctamente.";
        exit();
    } else {
        // Hubo un error al insertar los datos
        echo "Error al añadir el producto.";
    }

    // Cerrar la conexión a la base de datos
    $db = null;

}
*/

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Producto</title>
    <style>
            .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .form-container button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Producto</h2>
        <!-- <form action=" ?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> -->
        <form class="form" action="index.php?controller=ProductController&action=guardarProducto" method="post">
            <label for="nombre_prod">Nombre del Producto:</label>
            <input type="text" id="nombre_prod" name="nombre_prod" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
