<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$Desc1 = 0.10;
$Desc2 = 0.20;
$Desc3 = 0.50;
$total = 0;

if($n1=3){
    $total = $n2*$n1*$Desc1;
    echo "El total de su compra fue".$total;
}elseif ($n1<8) {
    $total = $n2*$n1*$Desc2;
    echo "El total de su compra fue".$total;
}else ($n1>=8) {
    $total=$n2*$n1*$Desc3;
    echo "El total de su compra fue".$total;
}

?>