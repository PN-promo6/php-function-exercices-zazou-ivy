<?php

class Playstation
{
    private $price;
    private $year;

    public function __construct($price, $year)
    {
        $this->price = $price;
        $this->year = $year;
    }

    public function whatIsMyPlaystation()
    {
        echo "This playstation " . "comes out in " . $this->year . " and costs " . $this->price;
    }
}

$ps5 = new Playstation(470, 2020);

echo $ps5->whatIsMyPlaystation();
