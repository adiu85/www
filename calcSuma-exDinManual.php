<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/8/2015
 * Time: 10:41 PM.
 *
 * pt n nr dat, natural, sa se calculeze suma:
 * S= 1+ 1*2+1*2*3+...+n-1*n

 */
$n = 9;
$suma = 0;
$produs = 1;
for ($i = 1; $i <= $n; $i++) {
    $produs = $produs * $i;
    $suma = $suma + $produs;
}
echo $suma;
