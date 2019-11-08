<?php

function tipo_lados($a,$b,$c){
	if ($a == $b and $b == $c) {
		$r= 'equilatero';
	}

	elseif ($a == $b or $b == $c or $c==$a) {
		$r= 'isosceles';
	}

	elseif ($a != $b and $b != $c and $c!=$a) {
		$r= 'escaleno';
	}
	return $r;
}


function tipo_angulo($A,$B,$C){
	$r='acutángulo';

	if($A==90 or $C==90 or $B==90)
		$r='rectángulo';

	if($A>90 or $C>90 or $B>90)
		$r='obtusándulo';
	return $r;
}

function tipo_triangulo($A,$B,$C,$a,$b,$c){
	$r= tipo_lados($a,$b,$c);
	$r.=' - ';
	$r.= tipo_angulo($A,$B,$C);
	return $r;
}

echo tipo_triangulo(90,45,45,1,1,sqrt(2)).' ¿rectángulo - isósceles?<br/>';
echo tipo_triangulo(60,60,60,1,1,1).' ¿acutángulo - equilatero? <br/>';
echo tipo_triangulo(90,90,90,1,2,3).' ¿escaleno - obtusangulo? <br/>';