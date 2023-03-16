<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'Conexion.php';
        $nombre= $_POST["nombre"];
        $activo= $_POST["activo"];

        $my_query = "INSERT INTO ciudad(nombre, activo) values ('".$nombre."', '".$activo."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>