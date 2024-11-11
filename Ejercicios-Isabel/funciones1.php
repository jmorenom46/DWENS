<!DOCTYPE html>
<html>

<body>

    <?php
    $a = 1;
    #isset comprueba si la variable existe.
    $result = (isset($a)) ? "La variable esta definida: " . $a . "<br>" : "La variable no esta definida<br>";
    echo $result;

    unset($a); #unset elimina la variable.
    
    $result = (isset($a)) ? "La variable esta definida: " . $a . "<br>" : "La variable no esta definida<br>";
    echo $result;
    echo gettype($a); #Al eliminar la variable esta se queda con el valor NULL.
    ?>

</body>

</html>