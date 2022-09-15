<?php
/*
 *Se recibirá un dato llamado pares por GET que contendra TRUE o FALSE.
Si es TRUE, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 si se le ha recibido  el valor FALSE
 en la pantalla tienen que aparecer los valores impares. 
 */

if($_GET['pares']){
    for ($i = 1; $i < (rand(1,99)); $i++){
        if ($i%2==0) {
            echo $i." ♦ ";
        }
    }
}else {
    for ($i = 1; $i < (rand(1,99)); $i++){
        if ($i%2==1) {
            echo $i." ♦ ";
        }
    }
}

?>