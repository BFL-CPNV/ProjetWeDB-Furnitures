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

    public function GetTotalPrice()
    {
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

        $this->numberOfItems += $quantityToAdd;
        $this->UpdateEveryItem();

    }

    public function DeleteItemToCart($code, $quantityToDelete)
    {
        $index = 0;
        if ($quantityToDelete == null) {
            foreach ($this->items as $item) {
                if ($item['code'] == $code) {
                    if (count($this->items) == 1) unset($_SESSION['cart']);
                    else array_splice($this->items, $index, 1);
                }
                $index++;
            }
        }
        $this->UpdateEveryItem();
    }

    public function UpdateCart($arrayQuantity)
    {
        $codeArray = array_keys($arrayQuantity);
        $fullCodeArray = $codeArray;

        for ($index = 0; $index < count($codeArray); $index++) {
            $code = substr($codeArray[$index], strpos($codeArray[$index], '-', 17));
            $code = str_replace('-', '', $code);

            $codeArray[$index] = $code;
        }

        $index = 0;
        foreach ($codeArray as $code) {
            foreach ($this->items as $item) {
                if ($item['code'] == $code) {
                    $this->items[$index]['quantity'] = (int)$arrayQuantity[$fullCodeArray[$index]];
                    $index++;
                }
            }
        }
        $this->UpdateEveryItem();
    }

    public function CheckoutCart()
    {
        $quantityToRemoveArray = [];
        foreach($this->GetEveryItems() as $item){
            try {
                $itemQuantity = getArticleQuantity($item['code']);
            } catch (ModelDataBaseException $ex) {
                $error = true;
                return 0;
            }
            if ($itemQuantity[0]['qtyAvailable'] < $item['quantity']) return 0;
            array_push($quantityToRemoveArray, $item['quantity']);
        }
        $this->RemoveQuantityFromDatabase($quantityToRemoveArray);
        return true;
    }

    private function AddItemToArray($item, $quantityToAdd)
    {
        /* Puts default img if necessary */
        if ($item[0]['photo']) $img = $item[0]['photo'];
        else $img = 'view/content/img/feature/default.jpg';

        $array = [
            "img" => $img,
            "description" => $item[0]['description'],
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
        for ($index = 0; $index < count($this->items); $index++) {
            if ($this->items[$index]['code'] == $code) {
                $this->items[$index]['quantity'] += $quantityToAdd;
                $this->items[$index]['totalPrice'] = $this->items[$index]['quantity'] * $this->items[$index]['price'];
            }
        }
    }


    private function UpdateEveryItem()
    {
        $this->ComputeItemTotalPrice();
        $this->ComputeTotalPrice();
        $this->ComputeNumberOfItems();
    }

    private function ComputeItemTotalPrice()
    {
        foreach ($this->items as $index => $item) {
            $this->items[$index]['totalPrice'] = $item['quantity'] * $item['price'];
        }
    }

    private function ComputeTotalPrice()
    {
        $this->totalPrice = 0;
        foreach ($this->items as $item) {
            $this->totalPrice += $item['quantity'] * $item['price'];
        }
    }

    private function ComputeNumberOfItems()
    {
        $this->numberOfItems = 0;
        foreach ($this->items as $item) {
            $this->numberOfItems += $item['quantity'];
        }
    }

    private function RemoveQuantityFromDatabase($quantityToRemoveArray){
        $index = 0;
        foreach ($this->GetEveryItems() as $item){
            try {
                $output = removeQuantityByArticleCode($item['code'], $quantityToRemoveArray[$index]);
            } catch (ModelDataBaseException $ex) {
                $error = true;
                return 0;
            }
            $index++;
        }
    }

}