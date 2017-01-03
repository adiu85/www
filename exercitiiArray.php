<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 2/21/2015
 * Time: 8:27 PM.
 *
 * sa se creeze un program care introdue primele 10 numere intr un array
 *
 *
 * TEME
 * **** de cate ori sa gaseste un nr intr un array ----> FACUT (dar mai e loc de imbunatatiri)
 * **** o functie care primeste ca parametri 2 arrayuri si returneza un nou array care contine doar nr impare din cele doua arrayuri;---->FACUT
 * ** Joi facem foreach
 * ** problema cu inversat un array
 */
$b = [];
for ($i = 1; $i <= 10000; $i++) {
    $b[] = $i;
}
print_r($b);
