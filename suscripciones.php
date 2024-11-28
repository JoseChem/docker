<?php
require_once 'db_conexion.php';
session_start();

$sql=$cnnPDO->prepare("SELECT * FROM streaming WHERE email =:email");
$sql->bindParam(':email', $_SESSION['email']);
$sql->execute();
$fila=$sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<!-- CSS only -->
    <link href="https://bootswatch.com/5/darkly/bootstrap.min.css" rel="stylesheet">
	<title>Streaming+</title>
</head>
<body>
    <header class="bg-dark p-2 text-white">
            <div class="contenedor">
                <h2 class="logotipo">Stream</h2>
                <nav>
                <a href="cerrar.php">Cerrar Sesion</a>
				<a href="suscripciones.php">Mis Suscripciones</a>
				<a href="index2.php" class="activo">Inicio</a>
                </nav>
            </div>
    </header>
    <form method="post">
        <div style="width:350px;margin: auto; margin-top: 110px;">
            <center><h3 style="font-family: Arial, Helvetica, sans-serif; margin-top:-100px;">Mis Suscripciones</h3></center>
            <br>
            <table class="table" style="width:700px;margin-left:-188px;margin-top:-30px;">
            <thead>
                <tr style="text-align:center;font-size:20px;">
                    <th scope="col" style="color:red;">Plataformas</th>
                    <th scope="col" style="color:#54E1EA;">Suscripcion</th>
                </tr>
            </thead>
                <tbody style="text-align:center;font-size:15px">
                    <tr>
                    <td><img src="img/net.png" width="40px"><br>Netflix</td>
                    <td><br><?php if (isset($_SESSION['email'])) 
                            {
                            echo ''.$fila['netflix']. '';
                            }
                             ?></td>
                    </tr>
                    <tr>
                    <td><img src="img/dis.png" width="70px"><br>Disney+</td>
                    <td><br><?php echo ''.  $fila['disney']. '';?></td>
                    </tr>
                    <tr>
                    <td><img src="img/hbo.png" width="80px"><br>HBO MAX</td>
                    <td><br><?php if (isset($_SESSION['email'])) 
                            {
                            echo ''.$fila['hbo']. '';
                            }
                             ?></td>
                    </tr>
                    <tr>
                    <td><img src="img/start.png" width="70px"><br>Start+</td>
                    <td><br><?php if (isset($_SESSION['email'])) 
                            {
                            echo ''.$fila['start']. '';
                            }
                             ?></td>
                    </tr>
                    <tr>
                    <td><img src="img/spo.png" width="40px"><br>Spotify</td>
                    <td><br><?php if (isset($_SESSION['email'])) 
                            {
                            echo ''.$fila['spotify']. '';
                            }
                             ?></td>
                    </tr>
                    <tr>
                    <td><img src="img/zeer.png" width="80px"><br>Deezer</td>
                    <td><br><?php if (isset($_SESSION['email'])) 
                            {
                            echo ''.$fila['deezer']. '';
                            }
                             ?></td>
                    </tr>
                    <tr>
                </tbody>
</table>

        </div>
    </form>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>