<?php
//ini_set('display_errors',1);
include 'conexion.php';

$u=$_POST['usuario'];
$p=md5($_POST['clave']);

$sql = "select * from seg_usuarios where usuario ='".$u."' and clave='".$p."' and activo='1'";
$result = mysqli_query($conexion, $sql);
$rstlogin = mysqli_fetch_array($result);	

if ($rstlogin) {

    session_name('back');
				session_start();
			    $_SESSION['Usuario']   = $rstlogin['usuario'];	
				$_SESSION['IDUsuario'] = $rstlogin['id'];
			    $_SESSION['Nombre'] = $rstlogin['nombre'];	//$usu->ID;
			    				
				$_SESSION['is_logged'] = 1;

    header ('location: index.php');
    exit();
 }else{
    header('location: login.php?mensajee=Usuario o Password Incorrectos');
 }  



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <!-- CSS adicional -->
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                   
                </a>
                
            </div>
        </nav>
    </header>
    <main>
        
       
       
        <section id="serOrador" class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-8">
                    <p class="text-center"></p>
                    <h2 class="text-center">LOGIN</h2>
                    <p class="text-center"></p>
                    <form action="login.php" method="post" enctype="multipart/form-data" name="contact-form" >
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="usuario" id="nombreOrador" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
                                <label for="nombreOrador">Usuario</label>
                            </div>
                           
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="clave" id="correoOrador" type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" required>
                                <label for="correoOrador">Contraseña</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col mb-3">
                               
                                 <div class="d-grid">
                                    <button type="submit" name="Login" class="btn btn-success btn-lg btn-form">Ingresar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                      <a href="index.php">Volver</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
       
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    
</body>

</html>

