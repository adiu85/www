<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/9/2015
 * Time: 12:08 AM
 * sa se creeze un program care inverseaza cifrele unui nr dat . de ex 123 -> 321
 */

$nr_dat = 2356;
$nr_array = str_split($nr_dat);
$arr_count = count($nr_array);
$arr_reverse = array();

for ($i=$arr_count-1;$i>=0;$i--){
    $arr_reverse[].=$nr_array[$i];
}
print_r($arr_reverse);





