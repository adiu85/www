<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/11/2015
 * Time: 6:55 PM.
 */
function printComparisonMessage($number)
{
    if ($number > 5) {
        echo "Numarul $number este mai mare decat 5\n";
        $number = rand(1, 6);

        return $number;
    } else {
        echo "Numarul $number este mai mic decat 5\n";
        $number = rand(4, 9);

        return $number;
    }
}

$numarCurent = 0;
while ($numarCurent <= 7) {
    if (printComparisonMessage($numarCurent) > 5) {
        $numarCurent = rand(0, 7);
    } else {
        $numarCurent = rand(3, 10);
    }
}
