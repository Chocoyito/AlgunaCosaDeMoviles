<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'Conexion.php';
        $id = $_POST["id"];
        $my_query = "DELETE from estudiante where id =".$id;
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