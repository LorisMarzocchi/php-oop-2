<?php
class Food extends Products
{
    private string $expirationDate;
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
