<?php

//gaseste daca un nr este prim sau nu . metoda mai putin originala.
//am facut o functie - m-am gandit ca ar putea avea return pt cazul in care gaseste nr prim. si cu un for inainte ar putea returna cele 200 de nr prime
//n-am inteles exact procedeul. ca sa nu ma blochez trec mai departe :)

/**
 * - se imparte numarul dat la toate numerele >=2 si mai mici decat el
 * - daca restul impartirii este 0 - inseamna ca numarul nu este prim;
 * - un nr este prim daca si numai daca se imparte la 1 si la el insusi;.
 */
$nr_dat = 5;
$hasDivided = false;

for ($i = 2; $i < $nr_dat; $i++) {
    $rest = $nr_dat % $i;

    if ($rest == 0) {
        echo 'nr  nu e prim';
        $hasDivided = true;
        break;
    }
}

if ($hasDivided == false) {
    echo 'nr este prim';
}
