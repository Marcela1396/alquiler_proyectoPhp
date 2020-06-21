<?php
    // Registra un auto en la base de datos (usado con ajax)
    include 'conexion.php';

    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $estado = 1;

    $sql="INSERT INTO autos (placa, modelo, mark, estado)
          values('$placa','$modelo','$marca', '$estado')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0;
    }
    mysqli_close($conexion);  // Cierra la conexión
?>
