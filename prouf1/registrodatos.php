<?php
    function InsertSchema($db, $nombre, $contraseña){
            $command="INSERT INTO users(nombre,contraseña)
            VALUES ('$nombre','$contraseña');";
            try{
                $db->exec($command);
                echo "Ya te has registrado <br>";
            }catch(PDOException $e){
                die($e->getMessage());
            }
    }
    function LoginSchema($db, $nombre, $contraseña){
        $command="SELECT nombre,contraseña from users where nombre=:nombre and contraseña=:contraseña";
        $stmt=$db->prepare($command);
        $stmt->execute(['nombre'=>$nombre]);
        $stmt->execute(['contraseña'=>$contraseña]);
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
