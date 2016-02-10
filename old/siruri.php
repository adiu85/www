<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 1/31/2015
 * Time: 4:35 PM
 */

/**
 *
 * facut  * O functie care primeste un numar si returneaza suma tuturor numerelor in ordine naturala, pana la acel numar inclusiv
 * facut partial* Un program care afiseaza primele 200 de numere prime
 * Un program care afiseaza primele 1000 de numere care contin cifra 5
 * O functie care verifica de cate ori se gaseste un numar intr-un array de numere
 * O functie care primeste 2 arrayuri ca parametru si returneza  un array care contine doar cifrele impare din cele 2
 * O functie care inverseaza un array, fara sa folosesti functia reverse
 * __________________________________________________________________________________________
 * O functie care primeste ca parametrii:
 * - un array,
 * - un numar NOU
 * - pozitia din array,
 *
 * si returneaza un array nou care are inserat numarul nou in pozitita specificata, urmat de toate elemntele prezente in array, fara functii php
 * __________________________________________________________________________________________
 *
 * O functie care testeaza daca un numar este palindrom http://en.wikipedia.org/wiki/Palindromic_number
 */


function insereazaNumerInArray($array, $pozitie, $numar_nou)
{

}

$array_intrare = array(1, 2, 5, 8, 55, 76, 45);
print_r(insereazaNumerInArray($array_intrare, 4, 22));
//asta ar terbui sa printeze 1,2,5,22,8,55,76,45