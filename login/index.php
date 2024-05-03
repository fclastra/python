<?php
  session_name('back');
  session_start();

  if(!isset($_SESSION['is_logged'])) {
    $_SESSION['is_logged'] = 'PHPSESSID';
    $_SESSION['is_logged'] == 0;
} 

if  ($_SESSION['is_logged']==0) {
    header('location: login.php?mensaje=Se ha desconectado del sistema');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
     <header>
         <nav>
              <a href="index.php">Inicio</a>
              <a href="logout.php" >Salir</a>
         </nav>

     </header>
   <!-- detalle -->
    <section>
        <h1>sesiones</h1>
       
        <?php
            echo "La variable de sesión es:" . SID;
            echo "el nombre de Usuario es: ". $_SESSION['Nombre'];
        ?>
        <!-- aca va una imagen de una casa -->
        <div>
        

        </div>
        <div>

       
        </div>

    </section>
    <!-- fin detalle vvav
   
    -->
    <footer>


    </footer>
</body>
</html>