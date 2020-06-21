<?php
    // Registra un cliente en la base de datos
    include 'encabezado.php';
    include 'conexion.php';

    $cedula = $_POST["cedulaCli"];
    $nombre = $_POST["nombreCli"];
    $telefono = $_POST["telefonoCli"];

    $sql="INSERT INTO clientes (cedula, nombre, telefono)
          values('$cedula','$nombre','$telefono')";
    
    if($conexion->query($sql) === TRUE) {
        echo('
            <br> <br>
            <div class="container">
                <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="images/exitoso.png">
                    <!-- Card content -->
                    <div class="card-body" align="center">
                        <a href="visualizaClientes.php" class="btn btn-primary">Aceptar</a>
                    </div>
                </div>
            </div>
        ');
    }    
    else {
        echo('
        <br> <br>
        <div class="container">
            <div class="card" >
            <!-- Card image -->
                <div align="center">
                    <img src="images/error.png" height="300" width="300" >
                </div>
                <!-- Card content -->
                <div class="card-body" align="center">
                    <h4 class="card-title"><a>"Error: "'. $sql .'"<br>"'. $conexion->error .'</a></h4>
                    <a href="index.php" class="btn btn-primary">Aceptar</a>
                </div>
            </div>
        </div>
        ');
    }
    

?>