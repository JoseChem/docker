<?php
require_once 'db_conexion.php';
session_start();
?>
<?php
if(isset($_POST['continuar'])) {
    $_SESSION['nombre']= $_POST ['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $confirmar=$_POST['confirmar'];
    if ($clave == $confirmar){
    $sql=$cnnPDO->prepare("INSERT INTO streaming (nombre, apellido, email, clave) VALUES (:nombre, :apellido, :email, :clave)");
    $sql->bindParam(':nombre', $_SESSION['nombre']);
    $sql->bindParam(':apellido',$apellido);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':clave',$clave);
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
    echo"<center>Cuenta Creada Con Exito</center>";
    }
    else{
        echo '<center>Las Credenciales No Coinciden';
    }
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
                    <a href="quees.php">¿Qué es Streaming?</a>
                    <a href="iniciarsesion.php" >Iniciar Sesion</a>
                    <a href="registrarme.php" class="activo">Registrarme</a>
                    <a href="index.php" >Inicio</a>
                </nav>
            </div>
    </header>


    <form method="post" id="registro">
        <div style="width:350px;margin: auto; margin-top: 50px;">
        
            <center><h3 style="font-family: Arial, Helvetica, sans-serif;">Crear Nueva Cuenta</h3>
                    <div class="form-floating mb-3">
                            <input type="text" class="form-control " id="nombre" name="nombre" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Password" autocomplete="off">
                            <label for="floatingPassword">Apellidos</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="email" class="form-control " id="email" name="email" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="clave" name="clave" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput">Contraseña</label>
                    </div>
                    <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="confirmar" name="confirmar" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput">Confirmar Contraseña</label>
                    </div>
                    <center><button type="submit" class="btn btn-danger" style="width:150px" name="continuar" id="continuar">Crear Cuenta</button></center>
        </div>
    </form>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#continuar').click(function(){
    if ($("#nombre").val() == ""){
         Swal.fire({
                 // icon: 'error',
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Favor de Ingresar tu Nombre!',
                  showConfirmButton: true,
                  confirmButtonText: 'Aceptar',
                  timer: 5000
                });

        return false;
      }
      if ($("#apellido").val() == ""){
         Swal.fire({
                 // icon: 'error',
				 icon: 'error',
				  title: 'Oops...',
				  text: 'Favor de Ingresar tu Apellido!',
                  showConfirmButton: true,
                  confirmButtonText: 'Aceptar',
                  timer: 5000
                });

        return false;
      }
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
      if ($("#confirmar").val() == ""){
         Swal.fire({
                 // icon: 'error',
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Favor de Confirmar Tu Clave!',
                  showConfirmButton: true,
                  confirmButtonText: 'Aceptar',
                  timer: 5000
                });

        return false;
      } 
    });
  });
</script>
