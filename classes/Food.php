<?php
class Food extends Products
{
    private string $expirationDate;
    private string $weight;

    public function __construct($image, $name, $price, $category, $expirationDate, $weight)
    {
        parent::__construct($image, $name, $price, $category);
        $this->setExpirationDate($expirationDate);
        $this->setWeight($weight);
    }
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
