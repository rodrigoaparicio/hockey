
  <nav class="navbar navbar-expand-sm   navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jugadora.php">Jugadoras</a>
          </li>
          <li class="nav-item dropdown dmenu">
          <?php if($_SESSION['tipo'] == 1){?>

            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Nueva Carga
          </a>
          <div class="dropdown-menu sm-menu">
            <a class="dropdown-item" href="altajugadora.php">Dar de alta jugadora</a>
            <a class="dropdown-item" href="cargarpartido.php">Cargar Partido</a>
            <a class="dropdown-item" href="#">Cargar GPS </a>
          </div>

          <?php } ?>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estadisticas</a>
        </li>
      
      
        </ul>
    </nav>