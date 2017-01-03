<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2/10/2016
 * Time: 11:19 PM.
 *
 * sa se afiseze primele 100 de numere ce contin cifra 5
 *se imparte numarul la 10.  se ia fiecare cifra(restul) a numarului si se compara cu 5. pana cand numarul/10>=0.1
 * avem counter= numarul care se autoincrementeaza
 * avem $rezultate = nr de rezultate gasite.
 */
$counter = 1; //de aici incepe sa numere in sus
$rezultate = 0;

while ($rezultate < 1000) {
    $counter++;
    $nr_de_verificat = $counter;
    while ($nr_de_verificat > 0.1) {
        if ($nr_de_verificat % 10 == 5) {
            $rezultate++;
            echo $counter.'contine cifra '."\n";
        }
        $nr_de_verificat = $nr_de_verificat / 10;
    }
}
