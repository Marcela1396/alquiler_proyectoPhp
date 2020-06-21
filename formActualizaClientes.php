<?php
    include 'encabezado.php';
    include 'conexion.php';

    $cedula = $_GET["id"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
    $sql = "SELECT * FROM clientes where cedula = '$cedula'"; 
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();  //cedula->'123', nombre->'maria',telefono ->'39293']
?>


<div class="container">
    <form action="./actualizaClientes.php" method="POST">
        <br> <br>
        
        <div align= "center">  
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Actualizacion del Cliente </h3>
        </div>    
        <!-- Material input -->
        <div class="md-form">
            <input type="hidden" id="cedula" name="cedulaCli" value="<?php echo $row['cedula'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="id">Cliente Cédula : <?php echo $row['cedula'] ?></label>
        </div>
        <br> <br>

        <div class="md-form">
            <input required type="text" id="nombre" name="nombreCli" value="<?php echo $row['nombre'] ?>" class="form-control">
            <label for="nombre">Nombre</label>
        </div>

        <div class="md-form">
            <input required type="number" id="telefono" name="telefonoCli" value="<?php echo $row['telefono'] ?>" class="form-control">
            <label for="telefono"> Telefono </label>
        </div>

        <button type="submit" class="btn btn-primary" >Actualizar </button>
        <a href="visualizaClientes.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php'
?>