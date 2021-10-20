let resultnum;
let result;


let score = 0;

let guessed = localStorage['guessed'] || false;
let highscore = localStorage['highscore'] || 0;
let name = localStorage['name'] || false;



//Save and load local
    function savelocal() {
        localStorage['guessed'] = guessed;
        localStorage['highscore'] = highscore;
    }

    function loadlocal() {
        document.getElementById("highscore-output").innerHTML = localStorage['highscore']
        document.getElementById("guess-output").innerHTML = localStorage['guessed']
    }

//Executes the load
loadlocal()


//Submit the name
    function namesubmit() {
        //console.log(document.querySelector("#name-input").value)
        name = document.querySelector("#name-input").value;
        localStorage['name'] = name;
    }

//Removes input if name saved
    if (name) {
        console.log("To remove name, type localStorage.clear();")
        document.querySelector("#nameinput-sec").remove()
    }




// Creates function flip. Resultnum is random number between 0 and 1
    function flip() {
        resultnum = Math.floor(Math.random() * 2);
        if (resultnum === 0) {
            result = "Heads";
        }
        else {
            result = "Tails";
        }
        return result
}
    
// Turns 0 into Heads and 1 into Tails
    function guess(x) {
        if (x === 1) {
            guessed = "Heads"
            console.log("Guessed Heads")
            document.getElementById("guess-output").innerHTML = "Heads"
            savelocal()
        }
        else {
            guessed = "Tails"
            console.log("Guessed Tails")
            document.getElementById("guess-output").innerHTML = "Tails"
            savelocal()
        }
        return guessed

    }


//Flips the coin
function tossfunction() {
    //console.log("flipping coin...")
    console.log("it was " + flip())
    //Makes sure the result and guess are the same
    if (guessed === result) {
        //console.log("you were right")
        score++;
        document.getElementById("game-output").innerHTML = score;
        updatehighscore()
    }
    //If they guess wrong, set the score to 0 and sends the highscore
    else {
        updatehighscore()
        //console.log("you were wrong")
        score = 0;
        document.getElementById("game-output").innerHTML = score;
        sendhighscore()
    }
}

//Updates the highscore
    function updatehighscore() {
        if (score >= highscore) {
            localStorage['highscore'] = score
            document.getElementById("highscore-output").innerHTML = score;

        }
        //console.log(highscore)
    }

//Inputs the
function sendhighscore() {
    $("#p1").val(name);
    $("#p2").val(highscore)
    $("#f1").submit()
    //document.querySelector('#p1').value = name;
    //document.querySelector('#p2').value = highscore;
    //document.querySelector("#f1").submit();
}

<script crossOrigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    src="https://code.jquery.com/jquery-3.6.0.min.js"/>