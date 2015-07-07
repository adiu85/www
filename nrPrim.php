<?php
/**
 * sa se creeaze o fuctie care verifica daca un numar este prim sau nu
 *
 *
 * un numar este pr:im daca se imparte (fara rest) doar la el si la 1.
 *
 * pt a verifica daca un numar este prim:
 *  - luam numarul respectiv si il impartim la toate numerele, de la 2 la acel numar.
 *  -daca obtinem rest 0 la impartirea din intervalul [2,nr) atunci nr nu este prim.
 * ----blocat - daca if verifica mai multe rezultate
 * later edit : pare sa fie rezolvat
 */


$prim = false;
function CheckIfPrime($nr_de_verificat)
{
    for ($i = 2; $i < $nr_de_verificat; $i++) {
        $rest = $nr_de_verificat % $i;
        //  print "restul e ". $rest . " afisat in for " . "\n";

        if ($rest == 0) {
            $prim = true;
        }
    }
    var_dump($prim);
    if ($prim == true) {
        echo "numarul NU e prim";
    } else {
        echo "numarul " . $nr_de_verificat . " ESTE PRIM";
    }
}
CheckIfPrime(4);
?>
