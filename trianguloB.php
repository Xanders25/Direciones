<?php
// vectores de test
$A=90; $B=45; $C=45;
$A=45; $B=45; $C=90;
$A=60; $B=60; $C=60;
$A=45; $B=90; $C=45;
$A=100; $B=40; $C=40;

$r='acutángulo';

if($A==90 or $C==90 or $B==90)
	$r='rectángulo';

if($A>90 or $C>90 or $B>90)
	$r='obtusándulo';



echo $r;