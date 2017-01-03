<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 2/28/2015
 * Time: 5:49 PM
 * Write a function that computes the running total of a list.
 */
$a = ['2', '5', '7', '1'];

$a_count = count($a);
$b = 0;
for ($i = 0; $i < $a_count; $i++) {
    $b += $a[$i];
}
echo $b;
