<?php
/**
 * 1. ex5.php sa se refaca cu for functia;
 sa se faca o functie care primeste un numar si care returneaza suma tuturor numerelor pana la acel numar, in ordine naturala.;




 **/

$numar = 10;



for ($i=1;$i<$numar;$i++) {
    $suma = $i + 1;
}

echo "suma";
echo "\n";

?>

<?php
/**NU E FACUT
 * sa se creeze un program care afiseaza primele 1000 de numere ce contin cifra 5
 *
 *Rezolvare
 *1)
 *impartim numarul dat la 10. Daca restul impartirii este 5 ,atunci numarul contine cifra 5.
 * Impartim noul numar la 10 si repetam pasul de mai sus.
 * Repetam pana cand restul impartirii este mai mare decat 1/5.
 *
 * 2) Trebuie facut cazul in care numarul este de forma 51,52,53...sau 550,551
 * -----------------------------------------------------------------
 * alegem un contor care incepe de la 0 si se incrementeaza cu 1.
 * daca contor % 10= 5 printeaza contorul Si incrementeaza numarul gasit cu 1.
 * daca contor %10 = 5 si daca contor / 10 >=5 si <6 atunci printeaza contorul din acest interval si incrementeaza nr gasit
 * continua pana cand nr gasite =1000

 *
 *
 *
 * 2)daca un numar contine
 */
$contor = 0;
$nrCuCifra = 0;
$nrCautat = 5;

while ($nrCuCifra <= 1000) {
    $contor++;/*
    if ($contor % 10 == 5) {
        print $contor . "\n";
        $nrCuCifra++;
    }
   while ($contor / 10 >= 5 && $contor / 10 < 6) { //pt cazul in care contorul este de forma 5x
        print $contor++ . "\n";
        $nrCuCifra++;
*/
    if ($contor % 10 == 5) {
        print $contor . " contine cifra"."\n";
        $nrCuCifra++;
    }
}
?>