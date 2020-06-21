<?php
    // Formulario que permite el registro de un cliente
    include 'encabezado.php';
?>

<div class="container">
    <form action="registrarCliente.php" method="POST">
        <br> <br>
        
        <div align= "center">  
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Datos del Cliente </h3>
        </div>    
        <!-- Material input -->
        <div class="md-form">
            <input required type="text" id="cedula" name="cedulaCli" class="form-control">
            <label for="cedula">Cedula</label>
        </div>

        <div class="md-form">
            <input required type="text" id="nombre" name="nombreCli" class="form-control">
            <label for="nombre">Nombre</label>
        </div>

        <div class="md-form">
            <input required type="number" id="telefono" name="telefonoCli" class="form-control">
            <label for="telefono"> Telefono </label>
        </div>

        <button type="submit" class="btn btn-primary" >Registrar </button>
        <a href="visualizaClientes.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php'
?>