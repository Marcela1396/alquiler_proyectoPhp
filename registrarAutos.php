<?php
    // Registra un auto en la base de datos 
    include 'conexion.php';

    $placa = $_POST["placa"];
    $marca = $_POST["mark"];
    $modelo = $_POST["modelo"];
    $estado = 1;

    
    $sql="INSERT INTO autos (placa, modelo, mark, estado)
          values('$placa','$modelo','$marca', '$estado')";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion
?>
    

