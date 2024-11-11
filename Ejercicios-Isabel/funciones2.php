<!DOCTYPE html>
<html>

<body>

    <?php

    echo (empty($var)) ? "La variable esta vacia<br>" : "La variable tiene valor<br>";

    #var no existe - empty da TRUE.
    
    $var = 5;
    echo (empty($var)) ? "La variable esta vacia<br>" : "La variable tiene valor<br>";

    #var existe y tiene un valor - empty da FALSE.
    
    ?>

</body>

</html>