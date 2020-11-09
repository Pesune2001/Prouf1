<?php    
	function connectMysql(string $dbhost, string $dbname,string $userdb,string $dbpass){
        try{
            $db = new PDO("mysql:host=$dbhost; dbname=$dbname;", $userdb, $dbpass);

        }catch(PDOException $e){
            echo $e->getMessage();
            die;
        }
        return $db;
}
        function InsertSchema($db, $nombre, $contraseña){
            $command="INSERT INTO users(name,passwd)
            VALUES ('$nombre','$contraseña');";
            try{
                $db->exec($command);
                echo "Ya te has registrado <br>";
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        function LoginSchema($db, $nombre, $contraseña){
        $command="SELECT name,passwd from users where name=:nombre and passwd=:contraseña";
        $stmt=$db->prepare($command);
        $stmt->execute(['name'=>$nombre]);
        $stmt->execute(['passwd'=>$contraseña]);
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        }
?>