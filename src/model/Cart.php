<?php
/**
 * Created by PhpStorm.
 * User: Akame
 * Date: 28/05/2020
 * Time: 13:35
 */

require_once "model/articlesManager.php";

class Cart
{

    public $numberOfItems;
    private $totalPrice;
    private $items = [];


    public function GetEveryItems()
    {
        return $this->items;
    }

    public function GetTotalPrice(){
        return $this->totalPrice;
    }

    public function AddItemToCart($code, $quantityToAdd)
    {
        try {
            $item = getSingleArticleByCode($code);
        } catch (ModelDataBaseException $ex) {
            $error = true;
        }
        $inCart = $this->CheckIfItemInCart($code);
        if ($inCart) {
            $this->AddQuantityToArray($code, $quantityToAdd);
        } else {
            $this->AddItemToArray($item, $quantityToAdd);
        }
        $this->ComputeTotalPrice();

    }

    private function AddItemToArray($item, $quantityToAdd)
    {
        $test = 3;
        $array = [
            "img" => $item[0]['photo'],
            "code" => $item[0]['code'],
            "price" => (int)$item[0]['price'],
            "quantity" => (int)$quantityToAdd,
            "totalPrice" => (int)$item[0]['price'] * $quantityToAdd
        ];
        array_push($this->items, $array);
    }

    private function CheckIfItemInCart($code)
    {
        foreach ($this->items as $item) {
            if ($item['code'] == $code) return true;
        }
        return false;
    }

    private function AddQuantityToArray($code, $quantityToAdd)
    {
        for ($index = 0; $index < count($this->items); $index++){
            if ($this->items[$index]['code'] == $code){
                $this->items[$index]['quantity'] += $quantityToAdd;
                $this->items[$index]['totalPrice'] = $this->items[$index]['quantity'] * $this->items[$index]['price'];
            }
        }
    }

    private function ComputeTotalPrice(){
        $this->totalPrice = 0;
        foreach ($this->items as $item){
            $this->totalPrice += $item['totalPrice'];
        }
    }
}