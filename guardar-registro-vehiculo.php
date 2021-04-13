<?php
    $marca = $_REQUEST ["marca"];
    $modelo = $_REQUEST ["modelo"];
    $placa = $_REQUEST ["placa"];
    
   
   
    //Conexión a la base de datos
    $host = "localhost";
    $dbname = "lives_manizales";
    $username = "root";
    $password = "";
    
    $conexion = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    //Contruir sentencia sql
    $sql = "INSERT INTO registro_vehiculos (`codigo_vehiculo`, `marca`, `modelo`, `placa`) 
    VALUES ('NULL','$marca','$modelo','$placa')";

   
    

    //Preparar sentencia sql
    $q = $conexion->prepare($sql);

    //Ejecutar sentencia sql
    $resultado = $q->execute();
    

    if($resultado){
        echo "<script>alert('El registro se realizó correctamente'); window.location = 'http://localhost/programacionIV/lives-php/crear-registro-socio.php'</script>";
    }else{
        echo "Hubo un error guardando el vehículo $placa";
    }

    
?>