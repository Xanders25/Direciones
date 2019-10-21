<?php
$a=1; $b=1; $c=3;

if ($a == $b and $b == $c) {
    echo 'equilatero';
}

elseif ($a == $b or $b == $c or $c==$a) {
    echo 'isosceles';
}

elseif ($a != $b and $b != $c and $c!=$a) {
    echo 'escaleno';
}
?>