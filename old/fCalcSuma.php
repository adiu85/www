<?php

//O functie care primeste un numar si returneaza suma tuturor numerelor in ordine naturala, pana la acel numar inclusiv

//Fie n nr dat, n>0. Functia adunare: 1+2+3+..+n-1+n
// Rezolvare : formula de calcul a sumei unui sir este : S = n(n+1)/2

//
$numar = 10;

function suma($numar)
{
    $suma = (($numar * ($numar + 1) / 2));

    return $suma;
}

$suma_mea = suma($numar);
echo $suma_mea;
