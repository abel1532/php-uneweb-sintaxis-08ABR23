<?php
   $myArchivo = fopen("ejemplo.txt", "r") or die("No se puede abrir el archivo");

   echo fread($myArchivo,filesize("ejemplo.txt"));

   fclose($myArchivo);
?>