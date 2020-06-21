<?php
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3> Listado de clientes </h3>
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
                        <th scope="col"> <p align="center"> Opciones </p> </th>
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
                        <td> 
                        <a href= "formActualizaClientes.php?id='. $cedula.' "class="btn btn btn-secondary"> Editar </a> 
                        <a href= "eliminaClientes.php?id='.$cedula.' "class="btn btn btn-danger"> Eliminar </a>  
                        </td>
                    </tr>
            ');                        
        }

        echo('
                </tbody>
            </table>
        </div>
        ');   
    }
    
    include 'pie.php'
?>