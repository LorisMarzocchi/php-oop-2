<?php
class Products
{
    private string $name;
    private string $price;

    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
