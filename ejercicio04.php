<?php
/*
 * Realiza la suma desde un número (primerNum) hasta otro (ultimoum)
 */

$numero1=3;
$numero2=6;
$total=0;
for ($i = $numero1; $i <= $numero2; $i++) {
    $total=$total+$i;
}
echo $total;
?>