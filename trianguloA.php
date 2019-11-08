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

echo tipo_lados(1,1,1).' da equilátero<br/>';
echo tipo_lados(2,1,1).' da isósceles<br/>';
echo tipo_lados(2,2,1).' da isósceles<br/>';
echo tipo_lados(3,2,3).' da isósceles<br/>';
echo tipo_lados(1,2,3).' da escaleno<br/>';

?>