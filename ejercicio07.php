<?php
/*
 * Realiza la suma desde un número (primerNum) hasta otro (ultimoum). Los valores de los dos parámetros se enviarán por GET.
 */
$total=0;
for ($i = $_GET['primerNum']; $i <= $_GET['ultimoNum']; $i++) {
    $total=$total+$i;
}
echo $total;
?>