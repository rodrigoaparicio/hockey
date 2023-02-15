<?php
    require 'access.php';
    $idpartido = $_REQUEST['idpartido'];

    if(isset($_POST['jugadora1'])){
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora1']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora2']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora3']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora4']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora5']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora6']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora7']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora8']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora9']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora10']);
        $partido = (new Access())->cargar_jugadora_partido($idpartido, $_POST['jugadora11']);

        //ir al partido
        //header("location: cargarjugadoraspartido.php?idpartido=".$idpartido);

    }else{
        $jugadoras = (new Access())->traer_jugadoras();


        $stringjugadoras = '';
        while ($jugadora = $jugadoras->fetch()) {
            $stringjugadoras = $stringjugadoras.'<option value="'.$jugadora['id'].'">'.$jugadora['nombre'].' '.$jugadora['apellido'].'</option>';
        }    
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
        <div class="card mb-4 box-shadow" style="height: 420px;">
          
     
        <div class="card mb-4 box-shadow">
          <div class="card-header" style="background-color: rgb(255, 20, 20); color: rgb(255, 255, 255);">
            <h4 class="my-0 font-weight-normal" style="font-family: &quot;Lucida Sans Unicode&quot;;">Jugadoras Titulares</h4>
          </div>
            <div class="card-body">
                <form method="POST">
                <div class="form-group">
                <select class="form-control" name="jugadora1">          
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control" name="jugadora2">          
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora3">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora4">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora5">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora6">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora7">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora8">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora9">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora10">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
                <div class="form-group">
                <select class="form-control"  name="jugadora11">
                    <?php echo $stringjugadoras; ?>
                </select>
                </div>
          
                <button type="submit" class="btn btn-primary" style="background-color: rgb(255, 20, 20); color: rgb(255, 255, 255);">Cargar</button>
                </form>
            
          </div>
        </div>
        
      </div>

      
    </div>
	
    

</body>
</html>
