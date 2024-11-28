<?php
require 'db_conexion.php';
  session_start();  
    if (isset($_POST['continuar'])) {
        $_SESSION['email']= $_POST ['email'];
        $_SESSION['clave']= $_POST ['clave'];
		$query=$cnnPDO->prepare('SELECT * from streaming WHERE email=:email and clave=:clave');
		$query->bindParam(':email', $_SESSION['email']);
		$query->bindParam(':clave', $_SESSION['clave']);
		$query->execute();
		$count=$query->rowCount();
		$campo = $query->fetch();
      if ($count)
      {
        $_SESSION['email'] = $campo['email'];
        $_SESSION['clave'] = $campo['clave'];
        $_SESSION['nombre'] = $campo['nombre'];
        header("location:index2.php");
      }
      else{
        echo"<center>Upps.. La contraseña o el correo son incorrectos.</center>";
      }
    }
    ob_end_flush();
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
                    <a href="quees.php" >¿Qué es Streaming?</a>
                    <a href="iniciarsesion.php" class="activo">Iniciar Sesion</a>
                    <a href="registrarme.php">Registrarme</a>
                    <a href="index.php" >Inicio</a>
                </nav>
            </div>
    </header>
    <form method="post">
        <div style="width:350px;margin: auto; margin-top: 150px;">
            <center><h3 style="font-family: Arial, Helvetica, sans-serif;">Iniciar Sesion</h3>
                    <div class="form-floating mb-3">
                            <input type="email" class="form-control " id="email" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <center><button type="submit" class="btn btn-danger" style="width:150px" id="continuar" name="continuar">Entrar</button></center>
                    </center>
        </div>
    </form>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#continuar').click(function(){
    if ($("#email").val() == ""){
         Swal.fire({
                 // icon: 'error',
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Favor de Ingresar tu Correo!',
                  showConfirmButton: true,
                  confirmButtonText: 'Aceptar',
                  timer: 5000
                });

        return false;
      }
      if ($("#clave").val() == ""){
         Swal.fire({
                 // icon: 'error',
				 icon: 'error',
				  title: 'Oops...',
				  text: 'Favor de Ingresar tu Clave!',
                  showConfirmButton: true,
                  confirmButtonText: 'Aceptar',
                  timer: 5000
                });

        return false;
      }
    });
  });
</script>
