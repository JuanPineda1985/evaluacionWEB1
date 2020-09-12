<?php


$Producto1='arroz';
$Producto2='papa';
$Producto3='huevos';
$Producto4='frijoles';
$Producto5='pastas';
$Producto6='leche';
$Producto7='sal';
$Producto8='azucar';
$Producto9='cerveza';
$Producto10='carne';

$precio1=10000;
$precio2=15000;
$precio3=12000;
$precio4=4000;
$precio5=6000;
$precio6=6000;
$precio7=800;
$precio8=2000;
$precio9=49000;
$precio10=25000;

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

//echo("la suma total es ".$total);//

if ($total<=80000) {
        echo('Gracias por su compra');
}else {
        echo('No le alcanza'); 
}


?>