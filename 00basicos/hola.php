<?php
//comentario de una sola linea
/*
Varias 
Lineas
*/
//imprimir en pantalla
echo("Hola Mundo</br>");

echo "Hola cruel mundo</br> estoy <h1>aprendiendo PHP</h1>";
//variables
$nombre = "Diego";
$Nombre = "Ricardo";
//concatenar variables
echo $nombre." ".$Nombre;
echo "</br>";
echo $nombre."&nbsp;".$Nombre;
echo "</br>";

$num1=5;
$num2=78;

$suma=$num1+$num2;

echo $suma;
echo "</br>";
echo "La variable \$suma tiene el valor de $suma";
echo "</br>";
$modulo = $num2 % 2;
if($modulo == 0){
    echo "El n&uacute;mero es Par";
}else{
    echo "El n&uacute;mero es Impar";
}
echo "</br>";

for($i=0;$i<=10;$i++){
    echo $i."</br>";
}


?>