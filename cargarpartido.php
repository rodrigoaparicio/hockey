<?php 
  if(isset($_POST['rival'])){
    $rival = $_POST['rival'];
    $fecha = $_POST['fecha'];
    $localidad = $_POST['localidad'];
    $tipopartido = $_POST['tipopartido'];

    require 'access.php';

    $idpartido = (new Access())->alta_partido($rival, $fecha, $localidad, $tipopartido);

    //echo $idpartido;

    header("location: cargarjugadoraspartido.php?idpartido=".$idpartido);
  }
?>

<!doctype html>
<?php 
        include 'head.php';
    ?>
<html>
  <body style="height: 545px;">

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
            </div>
  </nav>

<hr> 
    
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow" style="height:auto;">
          <div class="card-header" style="text-decoration-color: rgb(255, 15, 15); background-color: rgb(255, 20, 20); color: rgb(255, 255, 255);">
            <h4 class="my-0 font-weight-normal" style="font-family: &quot;Lucida Sans Unicode&quot;;">Datos Partido</h4>
            
            <div class="card-body" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
              <form method="POST">
                <div class="form-group">
                  <label>Nombre Rival:&nbsp;</label>
                  <input type="text" class="form-control" name="rival">
                </div>
              
                <div class="form-group" style="margin-top: 10px; margin-bottom: 24px;">
                  <label>Fecha:</label>
                  <input type="date" class="form-control" name="fecha">
                </div>
                <div class="form-group" style="">
                <label>Localidad:</label>
                <select class="form-control" name="localidad">
                  <option value="1">LOCAL</option><option value="2">VISITANTE</option>
                </select>
              </div>
              <div class="form-group" style="">
                <label>Tipo Partido:</label>
                <select class="form-control" name="tipopartido">
                  <option value="1">AMISTOSO</option><option value="2">OFICIAL</option>
                </select>
              </div>
             <button type="submit" class="btn btn-primary" style="background-color: rgb(255, 20, 20); color: rgb(255, 255, 255);">Cargar</button>
             </form>
              
            </div>
            
            
            
          </div>
          
     
        </div>
     
        
      </div>

      
    </div>
	
    

</body>
</html>
