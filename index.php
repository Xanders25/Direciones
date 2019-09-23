<?php
if(isset($_GET['email'])){
	print_r($_GET);
	$f=fopen('datos.txt','a');
	fwrite($f,$_GET['email']."\r\n");
	fclose($f);
}
?>
<form>
	<input name="email"/>
	<button>Suscribete :D</button>
</form>