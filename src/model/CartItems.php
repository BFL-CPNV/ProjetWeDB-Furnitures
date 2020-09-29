<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 14:55
 */
Class CartItems{
    public $code;
    private $img;
    private $price;
    private $quantity;
    private $totalPrice;

    public function __construct($code, $img, $price, $quantity, $totalPrice)
    {
        $this->code = $code;
        $this->img = $img;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }
}

$snow = new CartItems("A00", "test/test", 100, 3, 300);


echo $snow->code;