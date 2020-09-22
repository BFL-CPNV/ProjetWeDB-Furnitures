const POSITIVE_BUTTON_CLASSNAME = "positive-button_cart";
const NEGATIVE_BUTTON_CLASSNAME = "negative-button_cart";

let positiveButton = document.getElementsByClassName('positive-button_cart');
let negativeButton = document.getElementsByClassName('negative-button_cart');
let basePrice = document.getElementsByClassName('cart-base_price');
let inputText = document.getElementsByClassName('input-text_cart');
let totalPriceItem = document.getElementsByClassName('cart-total_item_price');
let totalPrice = document.getElementById('cart-total_price');

let itemsArray = []; /* This list gonna contain every item with (price, quantity and total) */

class cartItem {
    constructor(price, quantity, total){
        this.price = price;
        this.quantity = quantity;
        this.total = total;
    }

    AddQuantity(){
        this.quantity++;
        this.UpdateItem();
    }

    RemoveQuantity(){
        if (this.quantity > 1) this.quantity--;
        this.UpdateItem();
    }

    UpdateItem(){
        this.total = this.price * this.quantity;
    }
}

const buttonsEventListener = (button) => {
    for (let index = 0; index < button.length; index++){
        button[index].addEventListener('click', () => {
            if (button[index].className.includes(POSITIVE_BUTTON_CLASSNAME)) itemsArray[index].AddQuantity();
            if (button[index].className.includes(NEGATIVE_BUTTON_CLASSNAME)) itemsArray[index].RemoveQuantity();
            updateItem(itemsArray[index], index);
            updateTotal(itemsArray);
        });
    }
};

const updateItem = (item, index) => {
        totalPriceItem[index].textContent = item.total;
};

const updateTotal = (items) => {
    let newTotalPrice = 0;
    items.forEach((item) => {
        newTotalPrice += item.total;
    });
    totalPrice.textContent = newTotalPrice;

};

for(let index = 0; index < inputText.length; index++){
    let price = parseInt(basePrice[index].textContent);
    let quantity = parseInt(inputText[index].value);
    let total = parseInt(totalPriceItem[index].textContent);

    itemsArray.push(new cartItem(price, quantity, total));
}

buttonsEventListener(positiveButton);
buttonsEventListener(negativeButton);