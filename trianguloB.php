<?php

function tipo_angulo($A,$B,$C){
	$r='acutángulo';

	if($A==90 or $C==90 or $B==90)
		$r='rectángulo';

	if($A>90 or $C>90 or $B>90)
		$r='obtusándulo';
	return $r;
}

echo tipo_angulo(90,45,45).' ¿rectángulo?<br/>';
echo tipo_angulo(60,60,60).' ¿acutangulo?<br/>';
echo tipo_angulo(90,90,90).' ¿obtusangulo?<br/>';