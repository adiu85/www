<?php

/**
 * Created by PhpStorm.
 * User: adi
 * Date: 6/27/2015
 * Time: 2:40 PM.
 */
abstract class Drinkable
{
    abstract public function isDrinkable($ok_to_drink);
}

class Liquid extends Drinkable
{
    public function __construct($title, $ok_to_drink)
    {
        $this->title = $title;
        $this->ok_to_drink = $ok_to_drink;
        //$this->drinks=$drinks;
    }

    public function isDrinkable($ok_to_drink)
    {
        if ($ok_to_drink == 'y') {
            echo 'e ok de baut';
        }
    }
}

$array_objects = ['0' => new Liquid('apa', 'y'), '1' => new Liquid('petrol', 'n'), '2' => new Liquid('vodca', 'y'), '3' => new Liquid('acid', 'n'), '4' => new Liquid('diluant', 'n'), '5'=> new Liquid('bere', 'y'), '6'=>new Liquid('rom', 'y'), '7'=>new Liquid('GPL', 'n'), '8'=>new Liquid('freon', 'n'), '9'=>new Liquid('lapte', 'y'), '10'=>new Liquid('suc', 'y')];

foreach ($array_objects as $value) {
    if ($value->ok_to_drink == 'y') {
        echo 'se poate bea: ';
        print_r($value->title."\n");
    }
}

/*
 * Sa se creeze un array care sa contina diverse obiecte de tip Lichid, dar cu instante concrete: Apa, Benzina, etc
 * Sa contina cel putin 10 tipuri de obiecte.
 * Sa se parcurga acest array si pentru fiecare obiect sa se afle daca pooate sau nu sa fie baut de catre om, fara intoxicare
 */
