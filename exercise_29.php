<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'> -->
  <title>bucles</title>
</head>
<body>
  <?php
    /* while (recorre un bloque de código tantas veces hasta que se deje de cumplir la condición) */

    /* do while (recorre un bloque de código un avez y luego repite el ciclo siempre que la condición sea verdadera) */

    /* for (recorre un bloque de código un número específico de veces) */

    /* foreach (recorre un bloque de codigo para cada elemento de una matriz) */

    echo "impresión matriz";

    $matriz = [
      ["a"],
      ["b"],
      ["c"]
    ];

    for ($i = 0; $i < count($matriz); $i++) {
      var_dump($matriz[$i]);
    }

    echo '<br>';
    echo '<br>';

    echo "impresión matriz2";

    $matriz2 = [
      ["a", "b", "c"],
      ["d", "e", "f"],
      ["g", "h", "i"]
    ];

    for ($i = 0; $i < count($matriz2); $i++) {
      for ($j = 0; $j < count($matriz2); $j++) {
        echo "la variable i es $i y la variablej es $j";
        var_dump($matriz2[$i][$j]);
        echo '<br>';
      }
    }

    echo '<br>';
    echo '<br>';

    echo "impresión matriz3";

    $matriz3 = [
      ["a", "b", "c"],
      ["d", "e", "f"],
      ["g", "h", "i"],
      ["j", "k", "l"],
      ["m", "n", "o"]
    ];

    for ($i = 0; $i < count($matriz3); $i++) {
      for ($j = 0; $j < count($matriz3[$i]); $j++) {
        echo "la variable i es $i y la variablej es $j";
        var_dump($matriz3[$i][$j]);
        echo '<br>';
      }
    }

    echo '<br>';
    echo '<br>';

    echo "impresión matriz4";

    $matriz4 = [
      ["a", "b", "c", "aa"],
      ["d", "e"],
      ["g", "h", "i", "ab", "cd"],
      ["j"],
      ["m", "n", "o"]
    ];

    for ($i = 0; $i < count($matriz4); $i++) {
      for ($j = 0; $j < count($matriz4[$i]); $j++) {
        echo "la variable i es $i y la variablej es $j";
        var_dump($matriz4[$i][$j]);
        echo '<br>';
      }
    }

    echo '<br>';
    echo '<br>';

    echo "impresión matriz4 con array_map <br>";

    var_dump(array_map(null, $matriz4));
  ?>

  <!-- <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js' integrity='sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js' integrity='sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ' crossorigin='anonymous'></script> -->
</body>
</html>