const table = document.getElementById('table');
const productPrices = document.getElementsByClassName('productPrice');
const productQuantity = document.getElementsByClassName('productQuantity');
const productTotalCost = document.getElementsByClassName('productTotalCost');
const totalCost = document.getElementById('totalCost');

console.log(productPrices);
console.log(productQuantity);
console.log(productTotalCost);
console.log(totalCost);

function test(){
    let sum = 0

    console.log(productPrices[1].innerHTML);

    for (let i = 0; i < productQuantity.length; i++){
        console.log(productTotalCost[i].innerHTML);

        let subtotal = productQuantity[i].value * productPrices[i].innerHTML;
        productTotalCost[i].innerHTML = subtotal.toFixed(2);
        console.log(subtotal);

        sum += subtotal;
        console.log(sum);
    }

    totalCost.innerHTML = sum.toFixed(2);
    console.log(totalCost);

    console.log('aantal producten is gewijzigd');
}

table.addEventListener("change", test);
