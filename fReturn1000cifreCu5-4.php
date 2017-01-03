<?php
/* * sa se creeze un program care afiseaza primele 1000 de numere ce contin cifra 5
 * versiune 5.0 (cam multe esuate pana acum :) )
 *
 * incepem numaratoarea de la 0, incrementam cu 1, pana cand nr de rezultate =1000
 * daca contorul % 5 = 0 atunci incrementez nr de rezultate si printez contorul!
 * SAU (pana cand contor >1) daca contor %10 ==5 incrementeaza nr de rezultate.
 *                                   apoi imparte contorul la 10 si reia procesul
 *
 *
 *
 */

$contor = 0;
$nrRezultate = 0;

while ($nrRezultate <= 1000) {
    $contor++;

    $testare = $contor; //folosim o alta variabila, care are aceeasi valoare cu contorul, pt a testa daca contine cifra 5.
    //INTREBARI :
    while ($testare > 1) {
        if ($testare % 10 == 5) {
            $nrRezultate++;
            echo $contor."\n";
            break;
        } else {
            $testare = $testare / 10;
        }
    }
}
