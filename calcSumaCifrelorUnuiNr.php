<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/8/2015
 * Time: 11:47 PM.
 *
 * sa se calculeze suma cifrelor unui nr natural dat.
 *
 * ex 234  -> 9
 **/
$nr = 123456789;
//$cat=floor($nr/10);
$suma = 0;

while ($nr > 0.1) {
    $rest = $nr % 10;
    $suma = $suma + $rest;
    $nr = $nr / 10;
}
echo $suma;
