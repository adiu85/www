<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 4/13/2015
 * Time: 10:36 AM.
 *
 * sa se creeze un program care sorteaza elementele unui array.
 *
 * R. vom folosi metoda bubble sort
 * luam toate elementele din array, doua cate doua(consecutive) si le comparam.
 * Daca elementul din dreapta este mai mic decat cel din stanga le schimbam pozitia.
 * Repetam pana cand sunt ordonate.
 */
$array = [7, 21, 2, 58, 94, 1];
$array_count = count($array);

for ($i = 0; $i < $array_count; $i++) {
    for ($j = $i + 1; $j < $array_count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        }
    }
}

print_r($array);
