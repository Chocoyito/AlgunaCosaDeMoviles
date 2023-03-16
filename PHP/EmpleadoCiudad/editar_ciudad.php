<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'Conexion.php';
        $id = $_POST["id"];
        $nombre= $_POST["nombre"];
        $activo= $_POST["activo"];


        $my_query = "UPDATE ciudad set nombre= '".$nombre."', activo= '".$activo."' where id=".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'Realizado con exito';
        } else { 
            echo 'error';
        }
    } else {
        echo 'error';
    }

?>