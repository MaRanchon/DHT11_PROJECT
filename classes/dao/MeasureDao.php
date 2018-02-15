<?php

namespace dao;

use domain\Measure;

class MeasureDao extends DaoBase
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function createMeasure($measureObject) {

        $query = $this->bdd->prepare("INSERT INTO releve (temperature, humidite) VALUES (:temperature, :humidite);");
        $query->bindParam(":temperature", $measureObject->temperature);
        $query->bindParam(":humidite", $measureObject->humidite);
        $query->execute();

        $id = $this->bdd->lastInsertId();

        $measureObject->id = $id;

        return $id;
    }

    public function readMeasureByDateTime($date) {
        $result = null;

        $query = $this->bdd->prepare("SELECT * FROM releve WHERE datetime = :datetime;");
        $query->bindParam(":datetime", $date);

        if ($query->execute()) {
            if ($donnees = $query->fetch()) {
                $temperature = $donnees["temperature"];
                $humidite = $donnees["humidite"];

                $result = new Measure($temperature, $humidite);
            }
        }

        return $result;
    }

    public function readMeasureById($id) {

        $result = NULL;

        $query = $this->bdd->prepare("SELECT temperature, humidite FROM releve WHERE id = :id;");
        $query->bindParam(":id", $id);

        if ($query->execute()) {
            if ($donnees = $query->fetch()) {
                $temperature = $donnees["temperature"];
                $humidite = $donnees["humidite"];

                $result = new Measure($temperature, $humidite);
            }
        }

        return $result;
    }

    public function updateMeasure($id, $measureObject) {
        $query = $this->bdd->prepare("UPDATE releve SET temperature = :temperature, humidite = :humidite WHERE id = :id;");
        $query->bindParam(":temperature", $measureObject->temperature);
        $query->bindParam(":humidite", $measureObject->humidite);
        $query->bindParam(":id", $id);
        $query->execute();
    }

    public function deleteMeasureById($id) {
        $query = $this->bdd->prepare("DELETE FROM releve WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
    }

}