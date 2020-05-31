<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 13:35
 */

class Cart{

    public $numberOfItems;
    private $test = "123123";
    private $totalPrice = "2";
    private $items = array("London", "Paris", "New York");

    public function GetEveryItems(){

        return $this->items;
    }
    private function AddObject(){

    }
}