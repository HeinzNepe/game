let resultnum;
let result;


let score = 0;

let guessed = localStorage['guessed'] || false;
let highscore = localStorage['highscore'] || 0;
let hschange = 0;
let name = localStorage['name'] || false;


//TODO A coin has been flipped. What will it land on?
//Minst mulig klikk


//Save and load local
    function savelocal() {
        localStorage['guessed'] = guessed;
        localStorage['highscore'] = highscore;
    }

    function loadlocal() {
        document.getElementById("highscore-output").innerHTML = localStorage['highscore'];
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
    
// Sets the input into a let
    function guess(x) {
        if (x === "Heads") {
            guessed = "Heads"
            console.log("Guessed Heads")
            tossfunction()
            savelocal()
        }
        else {
            guessed = "Tails"
            console.log("Guessed Tails")
            tossfunction()
            savelocal()
        }
        return guessed;
    }


//Flips the coin
function tossfunction() {
    //console.log("flipping coin...")
    console.log("it was " + flip())
    //Makes sure the result and guess are the same
    if (guessed === result) {
        document.getElementById("guess-output").innerHTML = ("You were right, it was " + result )
        //console.log("you were right")
        score++;
        console.log(score)
        document.getElementById("game-output").innerHTML = score;
        updatehighscore()
    }
    //If they guess wrong, set the score to 0 and sends the highscore
    else {
        document.getElementById("guess-output").innerHTML = ("Sorry kid, it was " + result )
        updatehighscore()
        //console.log("you were wrong")
        document.getElementById("game-output").innerHTML = score;
        if (hschange === 1 && score > 0) {
            sendhighscore()
        }
    }
}

//Updates the highscore
    function updatehighscore() {
        if (score >= highscore) {
            highscore = score;
            localStorage['highscore'] = score
            hschange = 1;
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

