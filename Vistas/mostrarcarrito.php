<div class="container">
    <h2 style="text-align: center"> Carrito de la compra </h2><br><br>

      <?php
      if(!empty($_SESSION['carrito'])){
        echo " <table class='table'> <tr><th>Nombre</th> <th>Precio:</th><th>Descripcion</th></tr>";
        foreach ($data as $article){
                      echo "<tr>
                      <td hidden>".$article['id_producto']."</td>
                      <td>".$article['nombre']."</td>
                      <td>".$article['precio']." € </td>
                      <td>".$article['descripcion']."</td>
                      <td>";
                      echo "</tr>"; 
        }
        echo "</table>";
      }else{
        echo "<div class='alert alert-danger'><p style='text-align: center;'>El carrito de la compra esta vacio</p></div>";
      }
      ?>
</div>