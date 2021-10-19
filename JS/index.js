
console.log("index.js loaded")
let resultnum;
let result;

let guessed;

// Creates function flip. Resultnum is random number between 0 and 1
// Turns 0 into heads and 1 into tails
function flip() {
    resultnum = Math.floor(Math.random() * 2);
    if (resultnum === 0) {
        result = "heads";
    }
    else {
        result = "tails";
    }
    return result
}

function guess(x) {
    if (x === 1) {
        guessed = "heads"
        console.log("Guessed heads")
        document.getElementById("guess-output").innerHTML = "You are guessing: Heads"
        return guessed
    }
    else {
        guessed = "tails"
        console.log("Guessed tails")
        document.getElementById("guess-output").innerHTML = "You are guessing: Tails"
        return guessed
    }
}


//This makes the function
function tossfunction() {
    console.log("flipping coin...")
    console.log("it was " + flip())
    if (guessed === flip()) {
        console.log("you were right")
    }
    else {
        console.log("you were wrong")
    }
}