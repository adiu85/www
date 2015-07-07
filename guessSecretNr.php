<?php
/**
 * Write a guessing game where the user has to guess a secret number.
 * After every guess the program tells the user whether his number was too large or too small.
 * At the end the number of tries needed should be printed. I counts only as one try if the user inputs the same number consecutively.
 *
 *
 * ---> trebuie sa mai fac cu _POST , e nevoie de integrare cu forme html.
 *
 */

$nrIntrodus = 5;
$secretNr = 5;
$incercari =0;
if ($nrIntrodus > $secretNr) {
    echo "numarul este prea mare";
    $incercari++;
} elseif ($nrIntrodus < $secretNr) {
    echo "numarul este prea mic";
    $incercari++;


} else {
    echo "ai ghicit numarul  ";
}

?>