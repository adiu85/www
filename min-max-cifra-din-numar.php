<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/11/2015
 * Time: 7:29 PM
 *
 * Pentru un numar natural dat sa se afle care este maximul si care este minimul din cifrele sale, si sa se afiseze pe ecran
 */

$numberToTest = 302610;
$numberArray = str_split($numberToTest);
$counter = count($numberArray);

for ($i = 0; $i <= $counter - 1; $i++) {
    if ($numberArray[$i] > $numberArray[$i + 1]) {
        $max = $numberArray[$i];
    } else {
        $max = $numberArray[$i + 1];
    }
}

print "maximul este $max";
