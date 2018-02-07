<?php


class Measure
{
    public $id;
    public $temperature;
    public $humidite;
    public $datetime;

    public function __construct($temperature, $humidite)
    {
        $this->temperature = $temperature;
        $this->humidite = $humidite;
    }
}

