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

   $query = "INSERT INTO usuario (nombre, apellido, email) VALUES ('maria', 'hernandez', 'maria@mail.com')";

   if ($conexion -> query($query) === TRUE) {
      $ultimo_id = $conexion -> insert_id;
      echo 'Se insertó la data y el último id es: ' . $ultimo_id;
   } else {
      echo "error insertando data: " . $query . "<br>" . $conexion -> error;
   }

   $conexion -> close();
?>