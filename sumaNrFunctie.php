<?php
/**
 * 1. ex5.php sa se refaca cu for functia;.
 **/

/*$suma= 0;
$numar = 3;

for ($j=0;$j<=$numar;$j++) {
    $suma+=$j;
    print $suma;
    echo "\n";

}


*/

function suma($numar)
{
    $s = 0;
    for ($j = 0; $j <= $numar; $j++) {
        $s += $j;
        echo $s;
        echo "\n";
    }
}
suma(3);

?>


