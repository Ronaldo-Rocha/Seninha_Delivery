let input = document.querySelector("#troco");
let statusPagamento = document.querySelector("#status")

// input.disabled= false;

function verifica(value){
    
    if (value == 2) {
        input.disabled = false;
    } else if(value >= 3 ){
        input.disabled = true;
    }
}