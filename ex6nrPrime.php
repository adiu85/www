<?php

// sa se realizeze un program care afiseaza primele 200 nr prime.

// un nr prim este un nr care se divide doar la 1 si la el insusi. Primul nr prim este 2.
//
////$divizori = array("2","3","5","11","13","17","19");

/*
$nr_dat = 121;
$prim = 1;
$d = 2;
while ($nr_dat / 2 >= $d) {
    if ($nr_dat % $d == 0) {
        $prim = 0;
    }
    $d = $d + 1;
}
if ($prim == 1) {
    echo "nr ESTE prim";
} else {
    echo "nr NU e prim";
}
*/
$nr_dat = 0;
function isPrimeNumber($nr_dat)
{
    $prim = 1;
    $d = 2;
    while ($nr_dat / 2 >= $d) {
        if ($nr_dat % $d == 0) {
            $prim = 0;
        }
        $d = $d + 1;
        if ($prim == 1) {
            return true;
            break;
        } else {
            //echo "nr NU e prim";
            return false;
        }
    }
}
//var_dump(isPrimeNumber(120));
$noOfPrimes = 0;
while ($noOfPrimes < 200) {
    $nr_dat++;
    isPrimeNumber($nr_dat);
}
