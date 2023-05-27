<?php
   $myArchivo = fopen("ejemplo2.txt", "w") or die("No se puede abrir el archivo");

   $texto = "Hola, como estas\n";
   fwrite($myArchivo, $texto);

   $texto = "Hace bonito día\n";
   fwrite($myArchivo, $texto);

   fclose($myArchivo);
?>