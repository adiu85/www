<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 2/8/2016
 * Time: 12:43 PM.
 */
$result = 203;
$counter = 2;

for ($i = 2; $i <= 5; $i++) {
    $result = $i + $counter;
    ++$counter;
}
echo $result;
