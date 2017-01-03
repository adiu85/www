<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 6/27/2015
 * Time: 5:57 PM.
 */
class Dog
{
    public function __construct()
    {
        echo 'New dog in town';
    }

    public function bark()
    {
        echo 'baark';
    }
}

class Schnautzer extends Dog
{
    public function bark()
    {
        echo 'ham';
    }
}

class Cocker extends Dog
{
    public function bark()
    {
        echo 'You can leave your hat on';
    }
}

$onedog = new Schnautzer();
$onedog->bark();

$twodog = new Cocker();
$twodog->bark();

/*
 * new dog in town
 * ham
 *
 * new dog in town
 * you can leave your hat on
 *
 *
 */
