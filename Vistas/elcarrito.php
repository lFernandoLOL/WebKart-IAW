
<style>
  .container{
    margin-top: 40px;
    margin-bottom: 41px;
  }
  .alert {
    width: 300px;
    margin: 0 auto;
  }
</style>
<div class="container">
    <h2 style="text-align: center"> Resumen del carrito </h2><br><br>

      <?php
      if(!empty($_SESSION['carrito'])){
        echo " <table class='table'> <tr><th>Nombre</th> <th>Precio:</th><th>Descripcion</th></tr>";
        echo "</table>";
      }else{
        echo "<div class='alert alert-danger'><p style='text-align: center;'>El carrito esta vacio</p></div>";
      }
      ?>
</div>