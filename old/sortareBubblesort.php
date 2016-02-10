<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 4/15/2015
 * Time: 7:39 PM
 */


$arrayToBeSorted = array(7, 21, 2, 58, 94, 1);
$count = count($arrayToBeSorted);
$flag = 1;

while ($flag == 1) {
    $flag = 0;
    for ($i = 0; $i <= $count - 2; $i++) {
        if ($arrayToBeSorted[$i] > $arrayToBeSorted[$i + 1]) {
            $temp = $arrayToBeSorted [$i];
            $arrayToBeSorted [$i] = $arrayToBeSorted[$i + 1];
            $arrayToBeSorted [$i + 1] = $temp;
            $flag = 1;
        }
    }
}
print_r($arrayToBeSorted);