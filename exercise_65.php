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
   $sentencia = $conexion -> prepare("INSERT INTO usuario (nombre, apellido, email) VALUES (?, ?, ?)");
   $sentencia -> bind_param("sss", $nombre, $apellido, $email);

   // parametros
   $nombre = "andrea";
   $apellido = "artiaga";
   $email = "andrea@mail.com";
   $sentencia -> execute();

   $nombre = "julio";
   $apellido = "artiaga";
   $email = "julio@mail.com";
   $sentencia -> execute();

   $nombre = "joselin";
   $apellido = "artiaga";
   $email = "joselin@mail.com";
   $sentencia -> execute();

   echo "Nuevos registros creados satisfactoriamente";

   $sentencia -> close();
   $conexion -> close();
?>