<!DOCTYPE html>
<html>

<body>

    <?php
    #Pre-incremento
    $x = 5;
    $y = ++$x;

    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    #Post-incremento
    $xx = 5;
    $yy = $xx++;

    var_dump($xx);
    echo "<br>";
    var_dump($yy);
    echo "<br>";

    if ($x == $y) {
        echo "Iguales en contenido";
        echo "<br>";
    }

    if ($x === $y) {
        echo "Iguales en contenido y tipo";
        echo "<br>";
    }

    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";

    var_dump($x <> $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";

    if ($x == 6 and $y == 6) {
        echo "AND true";
        echo "<br>";
    }

    if ($x == 6 or $y == 6) {
        echo "OR true";
        echo "<br>";
    }

    function prueba()
    {
        global $x;
        $b = $x;
        echo $b;
        echo "<br>";
    }
    prueba();

    function contador()
    {
        static $x;
        $x++;
        echo $x;
        echo "<br>";
    }
    contador();

    $ciclo = "DAW";
    $modulo = "DWES";
    print "<p>";
    printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
    print "</p>";


    ?>

</body>

</html>