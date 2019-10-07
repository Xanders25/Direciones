<?php
// php - Funciones

function calcula(){
	$n1 = 2025;
	$n2 = "41";
	 
	echo "Los numeros que usare son ", $n1, " y ", $n2, ".<br />";
	echo "La Suma: ", $n1+$n2,"<br />";
	echo "Resta: ", $n1-$n2,"<br />";
	echo "Multiplicacion: ", $n1*$n2,"<br />";
	echo "Division: ", $n1/$n2,"<br />";
	printf("Division sin decimales: %d<br />", $n1/$n2);
	echo "Resto de la division: ", $n1 % $n2, "<br />";
}

echo calcula();
?>