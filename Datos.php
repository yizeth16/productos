<?php
$nombre1="_POST" ['nombre1'];
$precio1="_POST" ['precio1'];

$nombre2="_POST" ['nombre2'];
$precio2="_POST" ['precio2'];

$nombre3="_POST" ['nombre3'];
$precio3="_POST" ['precio3'];

$suma=$precio1+$precio2+$precio3;

$descuento=$suma*0.16/100;

$total_pagar=$suma-$descuento;

echo "productos:";
echo "$nombre1,$nombre2,$nombre3";
echo "<'/br'>";
echo "suma de precios: ".$suma;
echo "<'/br'>";
echo "Descuento: ".$descuento;
echo "<'/br'>";
echo "total a pagar: ".$total_pagar;
?>
