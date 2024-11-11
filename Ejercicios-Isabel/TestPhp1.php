<!DOCTYPE html>
<html>
<body>

	<h1>Encabezado</h1>

<?php
$num = 0;
echo "<h2>My first PHP script!</h2>";
$num++;

echo "My first PHP script! V2<br>";
$num++;
function test(){
global $x;
$x=$x+5;
}
//comentario
#comentario 2
/*comentario
multiple*/
test();
test();
test();
echo $x ."<br>";
PHPINFO();

?> 

</body>
</html>
