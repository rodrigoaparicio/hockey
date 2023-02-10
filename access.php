<?php

class Access{

    public function conectar(){
        $host = 'localhost';
        $db   = 'hockey';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    

    }

    public function alta_jugadora($nombre, $apellido, $dni, $puesto){
        $pdo = $this->conectar();
        $sql = "INSERT INTO jugadoras (nombre, apellido, dni, puesto) VALUES (?,?,?,?)";
        $pdo->prepare($sql)->execute([$nombre, $apellido, $dni, $puesto]);
        $idjugadora = $pdo->lastInsertId();


        //insert en usuarios
        $sql = "INSERT INTO usuarios (usuario, password, tipo) VALUES (?,?,3)";
        $pdo->prepare($sql)->execute([$apellido, $dni]);
        $idusuario = $pdo->lastInsertId();


        $sql = "UPDATE jugadoras SET idusuario=? WHERE id = ?";
        if($pdo->prepare($sql)->execute([$idusuario,$idjugadora])){
            
        }else{
            echo "Error";		
        }
    }


    public function login($user, $password){
        $pdo = $this->conectar();
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        //$usuario = $pdo->prepare($sql)->execute([$user]);
        //echo $usuario['password'];
        $usuario = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $usuario->execute([$user]);
        $user2 = $usuario->fetch();
        
        if($user2['password'] == $password){
            return  $user2;
        }else{
            return "Password Incorrecta";
        }

    }
}


?>

    