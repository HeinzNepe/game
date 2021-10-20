let resultnum;
let result;

let guessed;
let score = 0;
let highscore = 0;

let name = localStorage['name'] || false;

if (name) {
    console.log("To remove name, type localStorage.clear();")
    document.querySelector("#nameinput-sec").remove()
}
// name = localStorage['name'] || '';


function namesubmit() {
    //console.log(document.querySelector("#name-input").value)
    name = document.querySelector("#name-input").value;
    localStorage['name'] = name;
}




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
        document.getElementById("guess-output").innerHTML = "Heads"
        return guessed
    }
    else {
        guessed = "tails"
        console.log("Guessed tails")
        document.getElementById("guess-output").innerHTML = "Tails"
        return guessed
    }
}


//This makes the function
function tossfunction() {
    //console.log("flipping coin...")
    console.log("it was " + flip())
    if (guessed === result) {
        //console.log("you were right")
        score++;
        document.getElementById("game-output").innerHTML = score;
    }
    else {
        //console.log("you were wrong")
        score = 0;
        document.getElementById("game-output").innerHTML = score;
    }
    updatehighscore()
}

function updatehighscore() {
    if (score >= highscore) {
        highscore = score
        document.getElementById("highscore-output").innerHTML = score;
    }
    //console.log(highscore)
}