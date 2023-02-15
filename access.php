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

    public function traer_jugadoras(){
        $pdo = $this->Conectar();
		$jugadoras = $pdo->query("SELECT id, nombre, apellido FROM jugadoras"); 
		return $jugadoras;
    }

    public function cargar_jugadora_partido($idpartido, $idjugadora){
        $pdo = $this->conectar();
        $sql = "INSERT INTO estadistica_jugadora (idpartido, idjugadora, titular, goles, cornersafavor, cornersencontra) VALUES (?,?,1,0,0,0)";
        $pdo->prepare($sql)->execute([$idpartido, $idjugadora]);

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

    public function alta_partido($rival, $fecha, $localidad, $tipopartido){
        $pdo = $this->conectar();
        $sql = "INSERT INTO datos_partido (rival, fecha, localidad, tipo_partido) VALUES (?,?,?,?)";
        $pdo->prepare($sql)->execute([$rival, $fecha, $localidad, $tipopartido]);
        $idpartido = $pdo->lastInsertId();

        return $idpartido;

    }
}


?>

    