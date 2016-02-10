<?php
$nr_dat = 241673;
$cifra = 4;

/**
 * - impartim nummarul la 10
 * - tinem partea intreaga ca fiind noul numar
 * - testam restul daca este cifra cautata, daca este ne oprim, daca nu este continuam
 * - ne oprim cu testele cand partea intreaga, adica numarul de testat este mai mica ca 10
 * - cand ne orpim avem grija sa testam daca partea inteaga nu este cumva numarul
 *
 *
 * EXERCITIU:
 * - pune conditie la while pt oprire
 * - fa programul sa afiseze mesaj si cand cifra nu exista in numar
 */


while ($nr_dat > 0.1) {
    $partea_intreaga = floor($nr_dat / 10);
    $restul_impartirii = $nr_dat % 10;
    if ($restul_impartirii == $cifra) {
        print "numarul contine cifra cautata";
        print "\n";
        break;
    } else {
        $nr_dat = $partea_intreaga;
        if ($nr_dat < 10) {
            if ($nr_dat == $cifra) {
                print "numarul contine cifra cautata";
                print "\n";
            }
            break;
        }
    }
}

?>
