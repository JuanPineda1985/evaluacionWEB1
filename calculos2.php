<?php
$n1 = $_GET['n1'];
$Horas = 0;
if($n1>=30){
    $Horas = $n1*25000;
}else{
    $Horas = $n1*20000;
}

echo "el resultado es: ".$Horas
?>