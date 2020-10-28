const POSITIVE_BUTTON_CLASSNAME = "positive-button_cart";
const NEGATIVE_BUTTON_CLASSNAME = "negative-button_cart";
const DELETE_BUTTON_CLASSNAME = "delete-button_cart";

let dataContainer = document.getElementsByClassName('cart-data-container');
let positiveButton = document.getElementsByClassName('positive-button_cart');
let negativeButton = document.getElementsByClassName('negative-button_cart');
let deleteButton = document.getElementsByClassName('delete-button_cart')
let basePrice = document.getElementsByClassName('cart-base_price');
let inputText = document.getElementsByClassName('input-text_cart');
let totalPriceItem = document.getElementsByClassName('cart-total_item_price');
let totalPrice = document.getElementById('cart-total_price');
let tableHeader = document.getElementById('cart-header_table');

let itemsArray = []; /* This list gonna contain every item with (price, quantity and total) */

class cartItem {
    constructor(price, quantity, total) {
        this.price = price;
        this.quantity = quantity;
        this.total = total;
    }

    AddQuantity(item, index) {
        this.quantity++;
        this.UpdateItem(item, index);
    }

    RemoveQuantity(item, index) {
        if (this.quantity > 1) this.quantity--;
        this.UpdateItem(item, index);
    }

    DeleteItem(index) {
        this.quantity = 0;
        this.total = 0;
        deleteItem(index);
    }

    UpdateItem(item, index) {
        this.total = this.price * this.quantity;
        updateItem(item[index], index);
    }
}

const buttonsEventListener = (button) => {
    for (let index = 0; index < button.length; index++) {
        button[index].addEventListener('click', () => {
            if (button[index].className.includes(POSITIVE_BUTTON_CLASSNAME)) itemsArray[index].AddQuantity(itemsArray, index);

            if (button[index].className.includes(NEGATIVE_BUTTON_CLASSNAME)) itemsArray[index].RemoveQuantity(itemsArray, index);

            if (button[index].className.includes(DELETE_BUTTON_CLASSNAME)) itemsArray[index].DeleteItem(index);
        });
    }
};
const updateItem = (item, index) => {
    console.log(item)
    totalPriceItem[index].textContent = item.total;
    updateTotal(itemsArray);
};

const updateTotal = (items) => {
    let newTotalPrice = 0;
    items.forEach((item) => {
        if (item != null) newTotalPrice += item.total;
    });
    totalPrice.textContent = newTotalPrice;
};

const deleteItem = (index) => {
    itemsArray[index] = null;
    dataContainer[index].style.display = "none";

    inputText[index].value = null;

    updateTotal(itemsArray)

    let counter = 0;
    itemsArray.forEach((item) => {
        if (item != null) counter++;
    })

    if (counter === 0){
        tableHeader.textContent = "Your cart is currently empty";
        tableHeader.style.cssText = "text-align: center; font-weight: 800; font-size: 30px;"
    }
}

for (let index = 0; index < inputText.length; index++) {
    let price = parseInt(basePrice[index].textContent);
    let quantity = parseInt(inputText[index].value);
    let total = parseInt(totalPriceItem[index].textContent);

    itemsArray.push(new cartItem(price, quantity, total));
}

buttonsEventListener(positiveButton);
buttonsEventListener(negativeButton);
buttonsEventListener(deleteButton);