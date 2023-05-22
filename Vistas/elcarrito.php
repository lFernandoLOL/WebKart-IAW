<style>
  .container{
    margin-top: 40px;
    margin-bottom: 41px;
  }
</style>
<div class="container">
    <h2 style="text-align: center"> Carrito de la compra </h2><br><br>

      <?php
      if(!empty($_SESSION['carrito'])){
        echo " <table class='table'> <tr><th>Nombre</th> <th>Precio:</th><th>Descripcion</th></tr>";
        echo "</table>";
      }else{
        echo "<div class='alert alert-danger'><p style='text-align: center;'>El carrito esta vacio</p></div>";
      }
      ?>
</div>