<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 3/5/2015
 * Time: 11:48 PM.
 *
 * Sa se creeze un program ce rezolva o ecuatie de gradul 1
 *
 *
 *
 * ecuatia de gr 1 este de forma:
 *
 * aX+b=0
 * X=-b/a ,pt a!=0
 *
 *daca a=0 -> 2 cazuri : b=0-> ecuatia are o infinitate de solutii
 *                      b!=0-> ecuatia nu are solutie
 */
$a = 1;
$b = 9;

if ($a != 0) {
    $x = -$b / $a;
    echo 'x are valoarea '.$x;
} else {
    if ($b = 0) {
        echo 'ecuatia are o infinitate de solutii';
    } else {
        echo ' ecuatia nu are solutie';
    }
}
