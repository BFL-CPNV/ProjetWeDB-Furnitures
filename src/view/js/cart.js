let negativeButton = document.getElementsByClassName('negative-button_cart');
let positiveButton = document.getElementsByClassName('positive-button_cart');
let inputText = document.getElementsByClassName('input-text_cart');
let totalPrice = document.getElementsByClassName('cart-total_price');
let basePrice = document.getElementsByClassName('cart-base_price');

let positiveRealInputValue = 0;
let negativeRealInputValue = 0;
let newTotalPrice = 0;

for (let index = 0; index < negativeButton.length; index++){
    negativeButton[index].addEventListener('click', () => {
        negativeRealInputValue = parseInt(inputText[index].value) - 1;
        newTotalPrice = positiveRealInputValue * parseInt(basePrice[index].textContent);
        totalPrice[index].textContent = newTotalPrice;
    });
}

for (let index = 0; index < positiveButton.length; index++){
    positiveButton[index].addEventListener('click', () => {
        positiveRealInputValue = parseInt(inputText[index].value) + 1;
        newTotalPrice = positiveRealInputValue * parseInt(basePrice[index].textContent);
        totalPrice[index].textContent = newTotalPrice;
    });

}