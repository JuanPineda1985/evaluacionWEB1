<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['op'];
$resultado = 0;
if($op=="+"){
    $resultado = $n1 + $n2;
}elseif ($op == "-") {
    $resultado = $n1 - $n2;
}elseif ($op =="*") {
    $resultado = $n1*$n2;
}else{
    $resultado = $n1/$n2;
}

echo "el resultado es: ".$resultado
?>