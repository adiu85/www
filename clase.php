<?php

/**
 * Created by PhpStorm.
 * User: adi
 * Date: 5/26/2015
 * Time: 6:08 PM.
 *
 * Citeste de pe net despre:
 * - mostenire intre 2 clase
 * - atribute si metode statice
 * - interfete
 * - clase abstracte
 * - atribute si metode final
 *
 *
 * De scris!!!!!
 *
 *  -niste clase care mostenesc  1,2 clase;
 *  -implementare de interfete
 *  -o clasa abstracta
 */
class Scolar
{
    private $nume;
    private static $adresa;

    public function __construct($nume, $adresa)
    {
        $this->nume = $nume;
        self::$adresa = $adresa;
        //print "sunt un constructor bun!"."\n";
    }

    //metode
    public function getNume()
    {
        return $this->nume;
    }

    private function getAdresa()
    {
        return self::$adresa;
    }

    public function returnAddress()
    {
        $ora = 19;

        return $this->getAdresa();
    }
}

$primulConcurent = new Scolar('Seba', 'Adresa lui seba');
$aldoileConcurent = new Scolar('adi', 'adresa lui adi');
$altreileaConcurent = new Scolar('ionel', 'adresa lui ionel');

echo $primulConcurent->returnAddress();
echo $altreileaConcurent->returnAddress();
