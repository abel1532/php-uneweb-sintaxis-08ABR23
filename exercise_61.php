<?php
   $nombreServidor = "localhost";
   $nombreUsuario = "root";
   $password = "";
   $baseDatos = "ejemplo_aristides";

   //crear conexion
   $conexion = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);

   //Chequeo de conexion
   if ($conexion -> connect_errno) {
      die("Conexion fallida: " . $conexion -> connect_errno);
   }

   // Crear tabla

   $query = "CREATE TABLE usuario (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(30) NOT NULL,
      apellido VARCHAR(30) NOT NULL,
      email VARCHAR(50),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )"; 

   if (mysqli_query($conexion, $query)) {
      echo 'La tabla fue creada';
   } else {
      echo "error creando tabla " . mysqli_error($conexion);
   }

   $conexion -> close();
?>