<?php
class Products
{
    private string $image;
    private string $name;
    private string $price;
    private string $category;


    public function __construct($image, $name, $price, $category)
    {

        $this->setImage($image);
        $this->setName($name);
        $this->setPrice($price);
        $this->setCategory($category);
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
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
