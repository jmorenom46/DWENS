<!DOCTYPE html>
<html>

<body>

    <?php
    $a = 200;
    $b = 33;
    $c = 500;

    if ($x == 100 or $y == 80) {
        // or --> Si una de las dos condiciones es verdadera = TRUE
        echo "Hello world!";
    }

    if ($a > $b xor $a < $c) {
        // xor -->  Si una es verdadera = TRUE, Si todas son verdaderas = FALSE
        echo "Ambas condiciones son verdaderas";
    }

    //Forma erronea y correcta de hacer una condicion --
    $a = 5;

    //Manera erronea de hacer la condicion
    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }

    //Forma correcta
    if ($a > 2 && $a < 7) {
        echo "$a is a number between 2 and 7";
    }



    ?>

</body>

</html>