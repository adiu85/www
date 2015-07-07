<?php
/**
 * Sa se creeze o functie care primeste ca parametri 2 arrayuri si returneza un nou array care contine doar nr impare din cele doua arrayuri;
 *
 * Pasi pt rezolvare:
 * parcurgem array-ul 1 :
 * verificam daca numerele continute in el sunt impare (adica de forma 2k+1, k >=0---GRESIT) SUNT impare daca restul impartirii la 2 e diferit de 0.
 * daca gaseste numere impare le scrie automat intr-un array
 *repetam procedura pt al doilea array
 */


$a1 = array("1", "6", "8", "21", "23", "4");
$a2 = array("5", "7", "9", "10", "12");

$ar_rezultat = array();

//parcurgem a1

$a1count = count($a1);
for ($i = 0; $i < $a1count; $i++) {
    if ($a1[$i] % 2 !== 0) {
        print "numarul " . "$a1[$i]" . " ESTE IMPAR" . "\n";
        $ar_rezultat[] = $a1[$i];
    }
}
//parcurgem a2
$a2count=count($a2);
for ($j=0;$j<$a2count;$j++){
    if ($a2[$j]%2!==0){
        print "numarul "."$a2[$j]"." ESTE IMPAR"."\n";
        $ar_rezultat[]=$a2[$j];
    }
}
print_r ($ar_rezultat);
?>