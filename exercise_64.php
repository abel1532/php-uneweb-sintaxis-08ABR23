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

   // Insertar data

   $query = "INSERT INTO usuario (nombre, apellido, email) VALUES ('carla', 'fernandez', 'carla@mail.com');";
   $query .= "INSERT INTO usuario (nombre, apellido, email) VALUES ('eduardo', 'morales', 'eduardo@mail.com');";
   $query .= "INSERT INTO usuario (nombre, apellido, email) VALUES ('ignasio', 'mendez', 'ignasio@mail.com')";

   if ($conexion -> multi_query($query) === TRUE) {
      echo 'Se insertaron varios datos a la vez';
   } else {
      echo "error insertando data: " . $query . "<br>" . $conexion -> error;
   }

   $conexion -> close();
?>