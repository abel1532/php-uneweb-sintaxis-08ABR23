<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'> -->
  <title>Condicionales en php</title>
</head>
<body>
  <?php
    /*Estos serian los condicionales en php*/

    /*if (este condicinal se ejecuta si ella es verdadera)*/

    /*if else (se ejecuta el código contenido en el bloque del if siempre y cuando la condición sea verdadera, se ejecuta el código del else siempre y cuando la condición sea falsa)*/

    /* if elseif else (se ejecutan los bloques de codigo del if primero si la condición es verdadera, luego, de ser falsa se pasa al elseif, y se termina con el else) */

    /* switch  (este selecciona uno de muchos bloques de código a ejecutar) */

    /* php el condicional if */

    $tiempo = date("H");

    if ($tiempo < "12") {
      echo "Buenos días";
    }

    echo '<br>';

    /* PHP el condicional if else */

    $tiempo = date("H");

    if ($tiempo > "12") {
      echo "Buenas tardes";
    } else {
      echo "Buenos días";
    }

    echo '<br>';

    /* PHP condicional if elseif else */

    $tiempo = date("H");

    if ($tiempo < "12") {
      echo "Buenas días";
    } elseif ($tiempo < "18") {
      echo "Buenos tardes";
    } else {
      echo "Buenas noches";
    }

    echo '<br>';

    /* PHP condicional switch case */

    $color_favorito = "rojo";

    switch ($color_favorito) {
      case "azul":
        
        echo "tu color favorito es el azul!";
        break;
      case "amarillo":
        echo "tu color favorito es el amarillo!";
        break;
      case "verde":
        echo "tu color favorito es el verde!";
        break;
      default:
        echo "Tu color favorito es diferente al azul, al amarillo y al verde";
    }
  ?>

  <!-- <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script> -->
</body>
</html>