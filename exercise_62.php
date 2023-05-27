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

   $query = "INSERT INTO usuario (nombre, apellido, email) VALUES ('jose', 'perez', 'jose@mail.com')";

   if ($conexion -> query($query) === TRUE) {
      echo 'Se insertó la data';
   } else {
      echo "error insertando data: " . $query . "<br>" . $conexion -> error;
   }

   $conexion -> close();
?>