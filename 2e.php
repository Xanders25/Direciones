<?php

//* aqui he entendido que j es un digito, j te mostrara hasta 10 porque es menor que 11, y j++ es que agrega algo. *// 
	for($j=1;$j<11;$j++){
 	for($i=1;$i<11;$i=$i+1) 
		echo $j.'x'.$i.'='.($j*$i).'<br>';
	echo '</br>';
}
?>