<?php
class Toy extends Products
{
    private string $recommendedAge;
    private string $material;
    public function setAge($recommendedAge)
    {
        $this->recommendedAge = $recommendedAge;
    }
    public function getAge()
    {
        return $this->recommendedAge;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
