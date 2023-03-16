<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'Conexion.php';
        $id = $_POST["id"];
        $nombres= $_POST["nombres"];
        $apellidos= $_POST["apellidos"];
        $cargo= $_POST["cargo"];
        $salario= $_POST["salario"];

        $my_query = "UPDATE empleado set nombres= '".$nombres."', apellidos= '".$apellidos."', cargo= '".$cargo."', salario= '".$salario."' where id=".$id;
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