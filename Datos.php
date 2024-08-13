<?php
$Producto1=$_POST['Producto1'];
$Precio1=$_POST['Precio1'];
$Producto2=$_POST['Producto2'];
$Precio2=$_POST['Precio2'];
$Producto3=$_POST['Producto3'];
$Precio3=$_POST['Precio3'];
$suma=$Precio1+$Precio2+$Precio3;
$descuento=$suma*0.16/100;
$total=$suma-$descuento;

echo"productos:";
echo"$Producto1,$Producto2,$Producto3";
echo "</br>";

echo"SUMA DE PRECIOS:  ".$suma;
echo"</br>";

echo"DESCUENTO: ".$descuento;
echo "</br>";

echo"TOTAL:  ".$total;
echo "</br>";
?>
