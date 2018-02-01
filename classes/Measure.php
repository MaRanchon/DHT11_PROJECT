<?php

class Measure
{
    public $id;
    public $temperature;
    public $humidite;
    public $datetime;

    public function __construct($temperature, $humidite, $datetime)
    {
        $this->temperature = $temperature;
        $this->humidite = $humidite;
        $this->datetime = $datetime;
    }
}

