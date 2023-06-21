<?php

trait Animals
{
    public string $animalType;

    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }
}
