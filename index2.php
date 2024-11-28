<?php
require_once 'db_conexion.php';
session_start();
?>
<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importantes -->
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">

    <!-- Libreria de jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>

    <!-- CDN Libreria de sweetalert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<title>Streaming+</title>
</head>
<body style="background-color: #1a1a1a;">
	<header class="bg-dark p-2 text-white">
		<div class="contenedor">
			<h2 class="logotipo">Stream</h2>
            <h4 style="margin-top:-10px;">Hola, <?php if (isset($_SESSION['email'])) 
                            {
                            echo '<font color="red">'.$_SESSION['nombre']. '</font>';
                            }
                             ?> Tenemos Nuevas Cosas Para Ti.</h4>
			<nav>
                <a href="cerrar.php">Cerrar Sesion</a>
				<a href="suscripciones.php">Mis Suscripciones</a>
				<a href="index2.php" class="activo">Inicio</a>
			</nav>
		</div>
	</header>
	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>
	</main>
	<center><h3 style="color: white;font-family: Arial, Helvetica, sans-serif; border-bottom: 1px white;">PLATAFORMAS DISPONIBLES</h3></center>
<br>
	<form method="post">
	<div style="width:900px; margin:auto;">
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
			  <div class="card h-100">
				<center><img src="img/net.png" class="card-img-top" alt="..." height="150px" style="margin-top: 10px; width:170px ;"></center>
				<div class="card-body">
				  <center><h5 class="card-title">Netflix</h5></center>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
					<center><a href="netflix.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				</div>
			  </div>
			</div>
			<div class="col">
				<div class="card h-100">
					<center><img src="img/dis.png" class="card-img-top" alt="..." height="150px" style="margin-top: 10px; width:250px ;"></center>
					<div class="card-body">
					<center><h5 class="card-title">Disney+</h5></center>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer">
				  <center><a href="disney.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
					<center><img src="img/hbo.png" class="card-img-top" alt="..." height="150px" style="margin-top: 10px; width:230px ;"></center>
					<div class="card-body">
					<center><h5 class="card-title">HBO MAX</h5></center>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer">
				  <center><a href="hbomax.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
					<center><img src="img/start.png" class="card-img-top" alt="..." height="70px" style="margin-top: 60px; width:220px ;"></center>
					<br>
					<div class="card-body" style="margin-top:5px;">
					<center><h5 class="card-title">Start+</h5></center>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer">
				  <center><a href="start.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
					<center><img src="img/spo.png" class="card-img-top" alt="..." height="130px" style="margin-top: 30px; width:130px ;"></center>
					<div class="card-body">
					<center><h5 class="card-title">Spotify</h5></center>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer">
				  <center><a href="spotify.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				  </div>
				</div>
			  </div>
			  <div class="col">
				<div class="card h-100">
					<center><img src="img/zeer.png" class="card-img-top" alt="..." height="170px" style="margin-top: 10px; width:220px ;"></center>
					<div class="card-body" style="margin-top:-20px;">
					<center><h5 class="card-title">Deezer</h5></center>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer">
				  <center><a href="deezer.php"><button type="button" class="btn btn-danger" name="netflix">Suscribirme</button></a></center>
				  </div>
				</div>
			  </div>
		  </div>
	</div>
    </form>
	<br>
	<br>
	<br>
</body>
</html>