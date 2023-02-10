<?php 
    require 'access.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $puesto = $_POST['puesto'];

        $grabar = (new Access())->alta_jugadora($nombre, $apellido, $dni, $puesto);
        require 'alertagrabo.php';
        //header("location: index.php");
    }
   
?>


<html lang="en">
    <?php 
        include 'head.php';
    ?>
    <nav class="navbar navbar-expand-sm   navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Inicio<span class="sr-only">(current)</span></a>
            </li>
            </ul>
</nav>
<body class="p-3 m-0 border-0 bd-example">
<div class="row">
	<aside class="col-sm-4">
        <div class="card">
         <article class="card-body">
         <h4 class="card-title mb-4 mt-1">Datos</h4>
    <form action="altajugadora.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label> 
        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
      </div>
      <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label > 
        <input type="text" class="form-control" id="apellido" name="apellido">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">DNI</label> 
        <input type="text" class="form-control" id="exampleInputEmail1"  name="dni">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Puesto</label >
        <select id="disabledSelect" class="form-select" name="puesto">
          <option>Defensora</option>
          <option>Delantera</option>
          <option>Medio Campo</option>
          <option>Arquera</option>  
        </select>
        </div>

        <div class="mb-3">
           <label for="foto" class="form-label"> Foto jugadora</label>
           <input type="file" class="form-control" id="foto" name="foto">
        </div>

       </select>
       <button type="submit" class="btn btn-primary" fdprocessedid="ch8ku">Cargar</button>
    </form>

   
  </body>


</html>



