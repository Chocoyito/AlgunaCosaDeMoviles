<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'Conexion.php';
        $nombres= $_POST["nombres"];
        $apellidos= $_POST["apellidos"];
        $carrera= $_POST["carrera"];
        $año= $_POST["año"];

        $my_query = "INSERT INTO empleado(nombres, apellidos, carrera, año) values ('".$nombres."', '".$apellidos."', '".$carrera."','".$año."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>