<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$Alt = $n2*$n2;
$imc = $n1/$Alt;

if($imc<18){
    echo "Peso insuficiente ";
}elseif ($imc>=24) {
    echo "peso normal ";
}elseif ($imc == 25 && $imc <= 27) {
    echo "sobrepeso grado 1 "; 
}elseif ($imc == 28 && $imc <= 30) {
    echo "sobrepeso grado 2 (preobesidad)";
}elseif ($imc == 31 && $imc <= 35) {
    echo "obesidad tipo 1 ";
}elseif ($imc == 36 && $imc <= 39) {
    echo "obesidad tipo 2 ";
}elseif ($imc == 40 && $imc <= 49) {
    echo "obesidad tipo 3 Morbida ";
}elseif ($imc > 50) {
    echo "obesidad tipo 4 Extrema ";
}

?>