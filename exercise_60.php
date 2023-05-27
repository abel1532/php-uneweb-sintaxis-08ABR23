<?php
   $nombreServidor = "localhost";
   $nombreUsuario = "root";
   $password = "";

   //crear conexion
   $conexion = new mysqli($nombreServidor, $nombreUsuario, $password);

   //Chequeo de conexion
   if ($conexion -> connect_errno) {
      die("Conexion fallida: " . $conexion -> connect_errno);
   }

   // Crear base de datos desde PHP

   $query = "CREATE DATABASE ejemplo_jesus";

   if ($conexion -> query($query) === TRUE) {
      echo "Base de datos creada satisfactoriamente";
   } else {
      "Error al crear la Base de datos " . $conexion -> error;
   }

   $conexion -> close();
?>