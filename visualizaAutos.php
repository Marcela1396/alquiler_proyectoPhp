<?php
    include 'encabezado.php';

    echo('
        <div align="center"> 
        <br>
            <h3> Listado de Autos </h3>
        </div>
    ');

    $sql = "SELECT * FROM autos JOIN marca on mark = idMarca";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ 
            $i = $i + 1;
            $placa = $row['placa'];
            $marca = $row['nombreMarca'];
            $modelo = $row['modelo'];  

            if($row['estado'] == 1) {
                $estado = 'Disponible' ; 
            }
            else{
                $estado = 'Alquilado' ; 
            }
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$placa.'</td>
                        <td>'.$marca.'</td>
                        <td>'.$modelo.'</td>
                        <td>'.$estado.'</td>
                    </tr>
            ');                        
        }
        echo('
                </tbody>
            </table>
        ');   
    }
    
    include 'pie.php'
    
?>