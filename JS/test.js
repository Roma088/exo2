let number1 = document.querySelector('#number1')
let number2 = document.querySelector('#number2')
let calculate = document.querySelector('#calculate')
console.log(number1, number2, calculate)
let resultHTML = document.querySelector('#result');
console.log(resultHTML);
/*
let varOne = parseInt(prompt("Entrer un chiffre"));

while (isNaN(varOne)){
    console.log("Il faut entrer un nombre wallah");
    varOne = parseInt(prompt("Entrer un chiffre"));
}
console.log(varOne);

let varTwo = parseInt(prompt("Entrer un chiffre"));

while (isNaN(varTwo)){
    console.log("Il faut entrer un nombre wallah");
    varTwo = parseInt(prompt("Entrer un chiffre"));
} */


function makeCalcul() {
    let varOne = parseInt(number1.value)
    let varTwo = parseInt(number2.value)
    let result = varOne + varTwo;

    let msgAdd = `<p>Le résultat de l'addition des deux nombres est ${result}</p>`;
    
    result = varOne/varTwo;
    let msgDiv = `<p>Le résultat de la division des deux nombres est ${result}</p>`;
    
    result = varOne*varTwo;
    let msgMul = `<p>Le résultat de la multiplication des deux nombres est ${result}</p>`;
    
    resultHTML.innerHTML = msgAdd;
    resultHTML.innerHTML += msgDiv;
    resultHTML.innerHTML += msgMul;
    resultHTML.style.backgroundColor = "red";
    
}

calculate.addEventListener("click", makeCalcul)


