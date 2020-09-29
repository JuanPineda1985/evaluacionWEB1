<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$imc = $n1 / $n2;
if($imc < 18,5){
    echo "Peso insuficiente ";
}elseif ($imc == 18,5 && $imc <= 24,9) {
    echo "peso normal ";
}elseif ($imc == 24,9 && $imc <= 26,9) {
    echo "sobrepeso grado 1 "; 
}elseif ($imc == 27 && $imc <= 29,9) {
    echo "sobrepeso grado 2 (preobesidad) ";
}elseif ($imc == 30 && $imc <= 34,9) {
    echo "obesidad tipo 1 ";
}elseif ($imc == 35 && $imc <= 39,9) {
    echo "obesidad tipo 2 ";
}elseif ($imc == 40 && $imc <= 49,9) {
    echo "obesidad tipo 3 Morbida ";
{elseif ($imc > 50) {
    echo "obesidad tipo 4 Extrema ";
}

?>