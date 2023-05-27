<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <style>
    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
    }

    .container {
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 48px;
      position: relative;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .contact-image-left {
      width: 250px;
      height: 150px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 60px;
      border-radius: 5px;
    }

    .contact-image-right {
      width: 250px;
      height: 150px;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 60px;
      border-radius: 5px;
    }

    strong {
      font-weight: bold;
    }

    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">&#x260e; Contacto &#x260e;</h1> <br><br>
        <img src="Vistas/img/contacto2.png" alt="Imagen izquierda" class="contact-image-left">
        <address>
          <strong>Dirección:</strong>
          Av. Felipe Corchero, 37 06800 Mérida, Badajoz
        </address>
        <p><strong>Teléfono:</strong> +123 456789</p> 
        <p><strong>Correo electrónico:</strong> mariokart@nintendo.com</p>
        <img src="Vistas/img/contacto.png" alt="Imagen derecha" class="contact-image-right">
      </div>
    </div>
  </div>

  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
