<?php
/**
 *  O functie care verifica de cate ori se gaseste un numar intr-un array de numere
 *
 * */
$a = array("2", "7", "3", "2", "1","9", "2", "2");
//$nrElementeArr = count($a);
//$nrCautat = 2;

function isNumberInside($nrCautat, $a)

{
    $gasit=0;
    $nrElementeArr = count($a);

    for ($i = 0; $i < $nrElementeArr; $i++) {
        if ($nrCautat == $a[$i]) {
            print $nrCautat . " apare in sir";
        $gasit=1;
        }
        else{
            $gasit=0;
        }
    }
}
isNumberInside(1, $a);

?>