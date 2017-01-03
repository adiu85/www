<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/8/15
 * Time: 8:03 AM.
 *
 * sa se creeze o functie care primeste ca argumente doua arrayuri si returneaza intersectia lor.
 */
$firstArray = [5, 19, 4, 4, 4, 21, 47, 103, 4];
$secondArray = [2, 9, 47, 59, 4];

function IsElementComune($firstArray, $secondArray)
{
    foreach ($firstArray as $value) {
        foreach ($secondArray as $value2) {
            if ($value == $value2) {
                $flag = 0;
//                foreach ($intersection as $value3) {
//                    if ($value == $value3) {
//                        $flag = 1;
//                        break;
//                    }
//                }

                if ($flag == 0) {
                    $intersection[] = $value;
                }
            }
        }
    }
    print_r($intersection);
}
IsElementComune($firstArray, $secondArray);
