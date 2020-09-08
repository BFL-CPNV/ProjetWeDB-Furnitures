let negativeButton = document.getElementsByClassName('button_cart');
let inputText = document.getElementsByClassName('input-text_cart');

/* Check every negatives button clicks */
for (let i = 0; i < negativeButton.length; i++){
    negativeButton[i].addEventListener('click', () =>{
        if (!inputText[i].value <= 1){
            inputText[i].value--;
        }
    })
}