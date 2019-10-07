<?php
// php - Funciones

function calcula($n1,$n2){
	$r=null;
	$r=$r."Los numeros que usare son ". $n1. " y ". $n2. ".<br />";
	$r=$r."La Suma: ". ($n1+$n2)."<br />";
	$r=$r."Resta: ". ($n1-$n2)."<br />";
	$r=$r."Multiplicacion: ". ($n1*$n2)."<br />";
	$r=$r."Division: ". ($n1/$n2)."<br />";
	$r=$r."Division sin decimales: ".($n1/$n2)."<br />";
	$r=$r."Resto de la division: ". ($n1 % $n2). "<br />";
	$r=$r."<br/>";
	return $r;
}

$v=calcula(30,52);
	echo $v;
echo calcula(4,2)
?>