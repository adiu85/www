<?php
/**
 * sa se creeze o functie care returneaza PRIMELE 200 de numere prime.
 *
 *
 * pt un sir, care incepe de la 1 ...si continua pana in momentul in care avem 200 de rezultate:
 * trebuie sa verificam daca un numar este prim sau nu. Daca da - se incrementeaza rezultatul.
 * executa functie de verificare:
 * incepe de la 1 . Cand ai rezultat pozitiv : $nr_de_rezultate++
 */

$nr_de_rezultate = 0;
$prim = false;
function isPrimeNumber($nr_de_verificat)
{
    for ($i = 2; $i < $nr_de_verificat; $i++) {
        $rest = $nr_de_verificat % $i;
        if ($rest == 0) {
            return false;
        }
    }
    return true;
}

for ($nr_de_verificat = 2; $nr_de_rezultate <= 200; $nr_de_verificat++) {
    if (isPrimeNumber($nr_de_verificat)) {
        print $nr_de_verificat."\n";
        $nr_de_rezultate++;
    }
}
?>