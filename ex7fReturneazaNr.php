<?php
//Sa se scrie o functie care returneaza cate cifre are un numar

$numar = 175032;

while (1) {
    $rest = $numar%10;
    $cat=floor($numar/10);


    echo "numarul este ".$cat;
    echo "\n";

    echo "iar restul este ".$rest ."\n";
}
?>

