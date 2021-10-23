// TABLE OF CONTENTS
//
//  1. Stats
//      1.1 Variables
//      1.2 Loading from localstorage
//      1.3 Name
//  2. Logic
//      2.1 Computer flip
//      2.2 Player flip
//      2.3 Comparing results
//          2.3.1 If correct do
//          2.3.2 If fail do
//          2.3.3 When to do what
//  3. Updating stats
//      3.1 Update highscore locally
//      3.2 Send to database
//
//  4. Debug tools
//      4.1 Show stats
//
// list
//Add a gif thing?

//------------------------------------------------------------
//------------------------------------------------------------
//  1.1 Variables

    let resultnum;
    let result;


    let score = 0;

    let guessed = localStorage['guessed'] || false;
    let highscore = localStorage['highscore'] || 0;
    let hschange = 0;
    let name = localStorage['name'] || false;




//------------------------------------------------------------

//1.2 Loading from localstorage
    //Loads the highscore from localstorage
    document.getElementById("highscore-output").innerHTML = localStorage['highscore'];



//1.3 Name
    //Submit the name
        function namesubmit() {
            //console.log(document.querySelector("#name-input").value)
            name = document.querySelector("#name-input").value;

            //Save name to localstorage
            localStorage['name'] = name;
        }

    //Removes input if name saved
        if (name) {
            console.log("To remove name, type localStorage.clear();")
            document.querySelector("#nameinput-sec").remove()
        }





//------------------------------------------------------------
//------------------------------------------------------------




// 2.1 Computer flip
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

// 2.2 Player flip
    // Sets the input into a let
        function guess(x) {
            if (x === "Heads") {
                guessed = "Heads"
                //console.log("Guessed Heads")
                tossfunction()
                localStorage['highscore'] = highscore;
            }
            else {
                guessed = "Tails"
                //console.log("Guessed Tails")
                tossfunction()
                localStorage['highscore'] = highscore;
            }
            return guessed;
        }

//------------------------------------------------------------

// 2.3 Comparing results
    // 2.3.1 If correct do
        //Defining the correct function
            function correct() {
                document.getElementById("guess-output").innerHTML = ("You were right, it was " + result )
                //console.log("you were right")
                score++;
                document.getElementById("game-output").innerHTML = score;
                updatehighscore()
            }

    // 2.3.2 If fail do
        //Defining the fail function
            function fail() {
                document.getElementById("guess-output").innerHTML = ("Sorry kid, it was " + result )
                updatehighscore()
                //console.log("you were wrong")
                if (hschange === 1 && score > 0) {
                    sendhighscore()
                }
                score = 0;
                document.getElementById("game-output").innerHTML = score;

            }

    // 2.3.3 When to do what
        //Flips the coin
            function tossfunction() {
                //console.log("flipping coin...")
                console.log("it was " + flip())
                //Makes sure the result and guess are the same
                if (guessed === result) {
                    correct()
                }
                //If they guess wrong, set the score to 0 and sends the highscore
                else {
                    fail()
                }
            }

//------------------------------------------------------------
//------------------------------------------------------------


// 3.1 Update highscore locally
    //Updates the highscore
    function updatehighscore() {
        if (score > highscore) {
            highscore = score;
            localStorage['highscore'] = score
            hschange = 1;
            document.getElementById("highscore-output").innerHTML = score;

        }
        //console.log(highscore)
    }

// 3.2 Send to database
    //Inputs the values and sends the form
        function sendhighscore() {
            $("#p1").val(name);
            $("#p2").val(highscore);
            $("#p3").val("send")
            $("#f1").submit()
            //document.querySelector('#p1').value = name;
            //document.querySelector('#p2').value = highscore;
            //document.querySelector("#f1").submit();
        }

//------------------------------------------------------------
//------------------------------------------------------------

// 4.1 Show stats
    //Shows score, highscore and hschange
    function stats() {
        console.log('Score is ' + score)
        console.log('Highscore is ' + highscore)
        console.log('hschange is ' + hschange)
    }