<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio web</title>
	<!--<link rel="stylesheet" href="Vistas/header.css">
	<link rel="stylesheet" href="header.css"> -->
	<style>
		.header-container {
			display: flex;
			align-items: center;
			justify-content: space-between;
			background-color: #690000;
			color: #fff;
			padding: 1rem;
		}

		.logo img {
			height: 40px;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav a {
			color: #fff;
			text-decoration: none;
		}

		nav a:hover {
			text-decoration: underline;
		}

		nav li {
			margin-right: 1rem;
		}

		.login,
		.cart {
			display: flex;
			align-items: center;
		}

		.login a {
			color: #fff;
			text-decoration: none;
			background-color: blue;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			transition: background-color 0.3s;
		}

		.login a:hover {
			background-color: darkblue;
		}

		.cart a {
			color: #fff;
			text-decoration: none;
			background-color: #333;
			padding: 0.5rem;
			border-radius: 5px;
		}

		.cart a:hover {
			background-color: #444;
		}

		.header-right {
			display: flex;
			align-items: center;
		}
	</style>
</head>
<body>
<header>
	<div class="header-container">
		<div class="logo">
			<a href="index.php"><img src="Vistas/img/logo_header.png " alt="Logo de mi sitio web" height="40px" width="40px"></a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Acerca de</a></li>
				<li><a href="index.php?controller=ProductController&action=getAllProducts">Productos</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
		<div class="header-right">
			<div class="cart">
				<a href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
			</div>
			<div class="login">
				<a href="Vistas\index_L.php">Iniciar sesión</a>
			</div>
		</div>
	</div>
</header>
</body>
</html>
