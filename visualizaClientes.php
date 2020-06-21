<?php
    include 'encabezado.php';

    echo('
        <div align="center"> 
        <br>
            <h3> Listado de clientes </h3>
        </div>
    ');

    $sql = "SELECT * FROM clientes";
    $i = 0;

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
            $i = $i + 1;
            $cedula = $row['cedula'];
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];   
            
            echo('
                <tbody>
                    <tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$cedula.'</td>
                        <td>'.$nombre.'</td>
                        <td>'.$telefono.'</td>
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