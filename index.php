<?php
    session_start();
    if(isset($_POST['user'])){
        require 'access.php';

        $user = $_POST['user'];
        $password = $_POST['password'];

        $usuario = (new Access())->login($user, $password);

        if(isset($usuario['tipo'])){
            $_SESSION['nombre'] = $usuario['usuario'];
            $_SESSION['tipo'] = $usuario['tipo'];
            header('Location: inicio.php');
        }else{
            echo $usuario;
        }

    }

?>

<!doctype html>
<html lang="en">
    <?php 
        include 'head.php';
    ?>

    <body class="body">
        <div id="conteiner">
            <header class="label">
                <h1 class="label2">CLUB BANCO PROVINCIA</h1> 
            </header>
        </div>  
        
        <div class="wrapper fadeInDown">
       <div id="formContent">
    <!-- Tabs Titles -->
    
    <!-- Login Form -->
    <form method="POST">
      <input type="text" id="user" class="fadeIn second" name="user" placeholder="user">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>

    </body>

</html>


