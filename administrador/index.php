<?php
        session_start();
       
?>

<?php
    require_once("../conection/conexion.php");

    $cedu1=$_SESSION['cedu'];
    $nombre1=$_SESSION['nomb'];
    $apellido=$_SESSION['apel'];
    $tipo=$_SESSION['tipo'];
    $tip=$_SESSION['tip'];

 
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/admin.css">
    <title>Administrador</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light border-3 border-bottom border-warning">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Surtitienda</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="MenuNavegacion" class="collapse navbar-collapse">
                    <ul class="nav nav-tabs ms-3">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="usuarios.php">Usuarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="clientes/index.php">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="productos/index.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="proveedores/prove.php">Proveedores</a></li>
                        <li class="nav-item"><a class="nav-link" href="ventas/vent.php">Crear venta</a></li>
                        <li class="nav-item"><a class="nav-link" href="facturas/factu.php">Ver facturas</a></li>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <p id="p">Bienvenido(a) <?php echo $nombre1 ?>  <?php echo $apellido ?></p>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                                <li><a class="dropdown-item"  href="../includes/salir.php">Cerrar sesion</a></li>
                                </ul>
                        </div>
                    </ul>
                </div>
            </div>
           
            
        </nav>
    </div>
    <div id="contorno">
		<br>

    <center><h3 id="h3">Bienvenido </h3>
            <h4 id="h3"><?php echo $tip?></h4>
    <h4><?php echo $nombre1?></h4> <h4><?php echo $_SESSION['apel']?></h4>
    <h2><?php echo $cedu1?></h2>
        <div id="fecha" class="bg-primary"><a id="a" align="right"> <h2 id="h2">Ha ingresado el</h2><?php include ("../includes/fecha.php"); echo fechas();?></a></div></center>
    </div>
</body>
</html>