xanders
<a href="http://192.168.0.88/asir2.html">Kim</a>
<a href="http://192.168.0.89/asir2.html">Alvarin</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>