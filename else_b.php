<?php

$n= 0;

$r='Sobresaliente';
if($n>8.5)
	$r='Notable';
if($n<7)
	$r='Aprobado';
if($n<5)
	$r='Pendiente';
echo "La nota $n es $r<br />";
?>