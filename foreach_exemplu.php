<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 4/5/2015
 * Time: 6:12 PM
 */
$arrayDeParcurs = array(1, 4, 3, 78, 34, 56, 3, 22, 33);

//parcurgere cu cheie, valoare
foreach ($arrayDeParcurs as $cheieCurenta => $valoareCurenta) {
    print $cheieCurenta." => ".$valoareCurenta."\n";
}

print "_______________________________________________________________\n";

//parcurgere doar cu valoare
foreach ($arrayDeParcurs as $valoareCurenta) {
    print $valoareCurenta."\n";
}