`<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 3/31/2015
 * Time: 7:03 PM
 *
 * Sa se realizeze functie care primeste ca parametrii 2 array-uri si returneaza un array care contine reuniunea celor 2
 *
 * - pornim de la 2 arrayuri, adica se definesc 2 arrayuri, si un al 3-lea array care il denumim arrayReunion in care
 * introducem elementele din primul array
 * - pentru fiecrae element din al doilea array:
 *      - testam daca acest element exista in arrayReunion pe oricare din pozitii
 *          - daca nu exista se adauga in arrayReunion
 *          - daca exista se ignora si se trece la urmatorul pas
 * ------------------------------------
 * pt fiecare element din A verificam daca exista in C
 *
 *  -daca elem exista atunci continuam la urmatorul element din A
 *  - daca elem nu exista atunci se adauga la capatul arraylui C
 *
 * pt B:
 *  -daca elem exista atunci continuam la urmatorul element din B
 *  - daca elem nu exista atunci se adauga la capatul arraylui C
 *
 */

$arrayA = array("1", "8", "12", "7", "11", "5", "1", "12");
$arrayB = array("13", "17", "49", "12", "1", "11");
$arrayC = array();
$arrayE=array();


$countA = count($arrayA);
$countB = count($arrayB);


for ($i = 0; $i < $countA - 1; $i++) {
    $countC = count($arrayC);
    $foundInC = false;
    //elem curent $arrayA[$i]
    for ($j = 0; $j < $countC; $j++) {
        if ($arrayA[$i] == $arrayC[$j]){
            $foundInC = true;
            break;
        }
    }
    if ($foundInC == false) {
        $arrayC[] = $arrayA[$i];
    }
}


for ($i = 0; $i < $countB - 1; $i++) {
    $countC = count($arrayC);
    $foundInC = false;
    //elem curent $arrayA[$i]
    for ($j = 0; $j < $countC; $j++) {
        if ($arrayB[$i] == $arrayC[$j]){
            $foundInC = true;
            break;
        }
    }
    if ($foundInC == false) {
        $arrayC[] = $arrayB[$i];
    }
}

print_r($arrayC);



