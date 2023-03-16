<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'Conexion.php';
        $id = $_POST["id"];
        $nombres= $_POST["nombres"];
        $apellidos= $_POST["apellidos"];
        $carrera= $_POST["carrera"];
        $año= $_POST["año"];

        $my_query = "UPDATE empleado set nombres= '".$nombres."', apellidos= '".$apellidos."', carrera= '".$carrera."', año= '".$año."' where id=".$id;
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