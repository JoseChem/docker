<?php
require_once 'db_conexion.php';
session_start();
if (isset($_POST['continuar']))  
{
    $_SESSION['hbo']= $_POST ['hbo'];
    $sql = $cnnPDO->prepare("UPDATE streaming SET hbo =:hbo WHERE email =:email");
    $sql->bindParam(':email', $_SESSION['email']);
    $sql->bindParam(':hbo', $_SESSION['hbo']);
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
    }

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
        <div style="width:350px;margin: auto; margin-top: 80px;">
        <center><img src="img/hbo.png" width="180px" >    
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php  echo ''.$_SESSION['email']. '';?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Plataforma:</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="            HBO MAX">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Precio:</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="            $99MX">
                    </div>
                </div>
                    <h6>¿Desea Suscribirse a esta plataforma?</h6>
                    <input type="hidden" name="hbo" id="hbo" value="Suscrito">
                     <center><button type="submit" class="btn btn-danger" style="width:150px" id="continuar" name="continuar">Suscribirme</button></center>
                    <br>
                    <center><a href="index2.php"><button type="button" class="btn btn-info" name="volver">No, Regresar</button></a></center>

        </div>
    </form>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    document.getElementById('continuar').onclick = function(){
    alert('Suscripción Comletada');
}
  });
</script>