<?php

class Playstation
{

    public $price;
    public $year;

    public function whatIsMyPlaystation()
    {

        echo "This playstation " . "comes out in " . $this->year . " and costs " . $this->price;
    }
}

$ps5 = new Playstation();
$ps5->price = 470;
$ps5->year = 2020;

echo $ps5->whatIsMyPlaystation();
