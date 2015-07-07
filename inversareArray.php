<?php
/**
 *
 * Sa se creeze o functie care inverseaza un array.
 *rezolvarea nu e buna!

 */

$a = array("1", "2", "3", "9");


function isReverse($a)
{
    $aCount = count($a);

    for ($i = $aCount - 1; $i >= 0; $i--) {
        print_r($a[$i]);
    }
}
isReverse($a);
?>