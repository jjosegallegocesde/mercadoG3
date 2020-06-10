<?php 

//Codigo para utilizar los condicionales en PHP

$producto1="arroz";
$producto2="aceite";
$producto3="carne";
$producto4="huevos";
$producto5="panela";

$valor1=5600;
$valor2=5000;
$valor3=2000;
$valor4=10500;
$valor5=3800;

$valorTotal=$valor1+$valor2+$valor3+$valor4+$valor5;

if($valorTotal<=50000){
    echo("el valor total de su compra es: ".$valorTotal);
    echo("<br>");
    echo("Señor usuario gracias por tener tanto dinero, usted es el mejor del mundo");
}else{
    echo("señor usuario salga ya mismo de esta tiendo, corra por su vida");
}

?>