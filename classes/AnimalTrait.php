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
    public function getAnimalTypeIcon(): string
    {
        if ($this->animalType === 'dog') {
            return 'Dog <i class="fa-solid fa-dog"></i>';
        } elseif ($this->animalType === 'cat') {
            return 'Cat <i class="fa-solid fa-cat"></i>';
        }

        return '';
    }
}
