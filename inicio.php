<?php
    session_start();

?>
<html>
    <?php 
            include 'head.php';
        ?>
    <?php 
            include 'navbarfijo.php';
        ?>
    <?php echo "Hola! ".$_SESSION['nombre'];
    ?>
    <body class="p-3 m-0 border-0">
        <div id="conteiner">
            <header class="label">
                <h1 class="label2">CLUB BANCO PROVINCIA</h1> 
            </header>

        </div>  
        
        
       

</html>
