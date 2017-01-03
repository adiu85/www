<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 2/3/2015
 * Time: 7:10 PM.
 */
$xxxxxxx = 'adi';

function functiaMea($aaaaaaaaa)
{
    echo 'In functiaMea avem: '.$aaaaaaaaa."\n";
    $aaaaaaaaa = 'seba';

    return $aaaaaaaaa;
}

function aDouaFunctie($zzzzzzz)
{
    echo 'In aDouaFunctie avem: '.$zzzzzzz."\n";
    $zzzzzzz = 'simo';

    return $zzzzzzz;
}

$xxxxxxx = functiaMea($xxxxxxx);
$xxxxxxx = aDouaFunctie(functiaMea($xxxxxxx));
echo 'In zona globala avem: '.$xxxxxxx."\n";
