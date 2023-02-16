<?php
class Cart{
    // public int $quantity = 0;
    // public float $totalPrice = 50;
    public int $quantity;
    // public float $totalPrice;
    private float $totalPrice; // i can get the value coz of the  function getTotalPrice

    public function __construct(int $quantity, float $totalPrice){
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function setTotalPrice(float $price):void{
        $this->totalPrice = $price;
    }

    public function getTotalPrice(): float{
        return $this->totalPrice;
    }

    public function discount(float $discount): void{
        $this->totalPrice -= $this->totalPrice * ($discount / 100);
    }

}




?>