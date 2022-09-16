<?php
/* 
 * El servidor recibirá un número. El programa tendrá que decirnos si es primo o no.
 */

$cont=0;
$numeroTotal=$_GET['numero'];

for($i=1;$i<=$numeroTotal;$i++){
    if($numeroTotal%$i==0)
        $cont++;
}
if($cont>2)
    echo "El numero ".$numeroTotal." no es primo";
else 
    echo "El numero ".$numeroTotal." es primo";

?>