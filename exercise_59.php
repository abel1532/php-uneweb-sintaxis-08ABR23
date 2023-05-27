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

   echo "Conectado satisfactoriamente";

   // para cerrar conexion

   // $conexion -> close();
?>