<!DOCTYPE html>
<html>
<body>
 
<?php
$mi_booleano = true;
$mi_entero = 42;
$mi_real = 1.6;
$mi_cadena = "texto";
$mi_variable = null;
echo $mi_booleano."<br> ".$mi_entero."<br> ".$mi_real."<br> ".$mi_cadena."<br> ".$mi_variable;
//Booleanos en true dan 1 y los falsos no aparecen, variables a null no aparecen

/** Operaciones con diferentes variables**/

//Operacion entero * real
echo $mi_entero*$mi_real;
echo "<br>";

//Operacion entero + cadena
echo $mi_entero+$mi_cadena;
echo "<br>";
echo $mi_cadena+$mi_entero;
echo "<br>";
//La cadena no aparece 

//Suma entero y real
echo $mi_entero+$mi_real;
echo "<br>";
//El entero se transforma en real

//Conversion de real a entero y suma
echo $mi_entero+(int)$mi_real;
echo "<br>";
//El real se vuelve el entero quitando los decimales


//Incrementos unarios
$a = 5;
$b = ++$a;
echo $b;
echo "<br>";
// Antes se le suma uno a $a (pasa a tener valor 6)
// y después se asigna a $b (que también acaba con valor 6).
$a = 5;
$b = $a++;
echo $b;
echo "<br>";

$c = 5;
$c++;
echo "valor de c = ".$c; #La variable hace 5+1 y muestra 6
echo "<br>";

#Suma de 2 booleanos
$bool1 = false;
$bool2 = true;
echo $bool1+$bool2; #bool1 = 0 y bool2 = 1 asi que sale 1
echo "<br>";



?>
</body>
</html>
