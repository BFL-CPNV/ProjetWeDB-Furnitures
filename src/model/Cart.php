<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 13:35
 */

class Cart{
    private $totalPrice;
    public $numberOfItems;
    private $items = array();

    public function GetEveryItems(){
        return $this->items;
    }
}