<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'Conexion.php';
        $nombres= $_POST["nombres"];
        $apellidos= $_POST["apellidos"];
        $cargo= $_POST["cargo"];
        $salario= $_POST["salario"];

        $my_query = "INSERT INTO empleado(nombres, apellidos, cargo, salario) values ('".$nombres."', '".$apellidos."', '".$cargo."','".$salario."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>