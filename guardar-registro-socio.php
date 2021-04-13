<?php
    $nombres = $_REQUEST ["nombres"];
    $apellidos = $_REQUEST ["apellidos"];
    $edad = $_REQUEST ["edad"];
    $celular = $_REQUEST ["celular"];
    $email = $_REQUEST ["email"];
    $contraseña = $_REQUEST ["contraseña"];
   
   
    //Conexión a la base de datos
    $host = "localhost";
    $dbname = "lives_manizales";
    $username = "root";
    $password = "";
    
    $conexion = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    //Contruir sentencia sql
    $sql = "INSERT INTO registro_socios (id_usuario, nombres, apellidos, edad, celular, email, contraseña)
    VALUES ('NULL','$nombres','$apellidos','$edad','$celular','$email', '$contraseña')";

   
    

    //Preparar sentencia sql
    $q = $conexion->prepare($sql);

    //Ejecutar sentencia sql
    $resultado = $q->execute();
    

    if($resultado){
        header ("location: crear-registro-vehiculo.php");
    }else{
        echo "Hubo un error guardando el socio $nombres";
    }

    
    

?>