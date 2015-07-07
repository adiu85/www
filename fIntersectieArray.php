c<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 4/5/2015
 * Time: 5:36 PM
 * sa se faca o functie care primeste ca argumente doua arrayuri si returneaza intersectia celor doua arrayuri.
 *luam fiecare element din primul array si il comparam cu toate elementele din arrayul al doilea.
 * daca elementul din primul array se regaseste si in al doilea atunci il copiem in arrayul gol.
 *
 *
 */
$firstArray = array(5, 19, 4, 4, 4, 21, 47, 103, 4);
$secondArray = array(2, 9, 47, 59, 4);
$flag = 0;
$intersection = array();

foreach ($firstArray as $value) {
    foreach ($secondArray as $value2) {
        if ($value == $value2) {
            $flag = 0;
            foreach ($intersection as $value3) {
                if ($value == $value3) {
                    $flag = 1;
                    break;
                }
            }

            if ($flag == 0) {
                $intersection[] = $value;
            }


        }
    }
}

print_r($intersection);
?>