<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Productos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="lista.css" rel="stylesheet">
</head>


    <!--Contenido-->
  
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                foreach ($data as $article){
                echo "<div class='col'>";
                    echo '<div class="card shadow-sm">';
                    echo '<img src="Vistas/img/' . $article['Nombre_Prod'] . '.png" width="400px" height="300px">';
                        echo '<div class="card-body">';
                                echo $article['Nombre_Prod'];
                                echo $article['Precio'];
                            
                            echo "<h5 class='card-title'>".$article['Nombre_Prod']."</h5>";
                            echo "<p class='card-text'>" .$article['Precio'] ."&#129689;</p>";
                            
                            
                        echo '<div class="d-flex justify-content-between align-items-center">';
                                echo '<div class="btn-group">';
                                echo '<a href="index.php?controller=ProductController&action=ProductById&id=' . $article['ID_Producto'] . '" class="btn btn-primary">Detalles</a>';
                                echo '</div>';
                                echo '<a href="index.php?controller=ProductController&action=añadirCarrito&id=' . $article['ID_Producto'] . '" class="btn btn-success">Agregar</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';

                #echo $article['Nombre_Prod'].".png";
                }
                ?>
                
                
                
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>



<?php
#print_r($data);
?>


