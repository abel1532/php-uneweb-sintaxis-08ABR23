<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fecha y hora en PHP</title>
</head>
<body>
  <?php
    /*
      la función date() sirve para formatear fecha y hora

      Obtener fecha

      - d - Representa el día del mes (01 al 31).
      - m - representa un mes (01 al 12).
      - Y - Representa un año (en cuatro dígitos).
      - l -('L minúscula') - representa el día de la semana.
    */

    echo "Hoy es " . date("Y/m/d") . "<br>";
    echo "Hoy es " . date("Y.m.d") . "<br>";
    echo "Hoy es " . date("Y-m-d") . "<br>";
    echo "Hoy es " . date("l") . "<br>";

  ?>
  <!-- para generar copyright automático -->


</br>
</br>
  &copy; 2020-<?= date("Y"); ?>

  <?php
    /*
      obtener el tiempo

      - H - formato de 24 horas de una hora (00 a 23)
      - h - formato de 12 horas de una hora con ceros a la izquierda (01 aa 12)
      - i - Minutos con ceros a la izquierda (00 a 59)
      - s - Segundos con ceros a la izquierda (00 a 59)
      - a - Antemeridiano y el Postmeridiano en minúsculas (am o pm)
    */
    
    echo "<br>";
    echo "<br>";

    echo "La hora es " .
    date("h:i:sa");

    /*Obteniendo la zona horaria*/

    echo "<br>";
    echo "<br>";

    date_default_timezone_set("America/Los_Angeles");
    echo "La hora de Los Angeles " .
    date("h:i:sa");

    /* 
      mktime(hora, minutos, segundos, mes, dia, año)  
    */

    echo "<br>";
    echo "<br>";

    $date = mktime(11, 14, 35, 5, 25, 1999);
    echo "La fecha creada es " . date("Y-m-d h:i:sa", $date);

    /*
      strtotime(cadena de caracteres con fecha);
    */

    $fechaHumana = strtotime("11:53am January 25 2010");

    echo "<br>";
    echo "<br>";

    echo "la fecha creada es " . date("Y-m-d h:i:sa", $fechaHumana);

    /*
      varios ejemplos de la flexibilidad de la función strtotime
    */

    echo "<br>";
    echo "<br>";

    $ejemplo1 = strtotime("tomorrow");
    echo "el día de mañana es " . date("Y-m-d h:i:sa", $ejemplo1);

    echo "<br>";
    echo "<br>";

    $ejemplo1 = strtotime("next wednesday");
    echo "el próximo domingo es " . date("Y-m-d h:i:sa", $ejemplo1);

    echo "<br>";
    echo "<br>";

    $ejemplo1 = strtotime("+5 Months");
    echo "En los próximos 5 meses será " . date("Y-m-d h:i:sa", $ejemplo1);

    /* ejemplo de lógica de fechas */

    $fechaInicio = strtotime("thursday");
    $fechaFin = strtotime("+8 weeks", $fechaInicio);

    echo "<br>";
    echo "<br>";
    while ($fechaInicio < $fechaFin) {
      echo date("M d", $fechaInicio) . "<br>";
      $fechaInicio = strtotime("+1 week", $fechaInicio);
    }

    echo "<br>";
    echo "<br>";

    /* vamos a saber cuánto falta para una fecha en específico, en este caso hasta el 25 de Diciembre */

    $fecha1 = strtotime("December 25");
    $fecha2 = ceil(($fecha1-time())/60/60/24);
    $fecha3 = date("d M", $fecha1);

    echo "Hay " . $fecha2 . " días hasta el " . $fecha3 . ".";
  ?>


</body>
</html>