<?php
/*
 *Elabore un programa que imprima la figura de un triángulo rectángulo de $numLineas lineas ajustada a la izquierda, formada por letras “o”. 
 *El valor de numero de lineas se enviará al servidor mediante GET. 
 */



for ($i = 0; $i < $_GET['numero']; $i++) {
    for($k=1;$k<$i;$k++){
        echo("o ");
    }
    echo "<BR> ";
}
?>