const url = "https://api.game.topheinz.com/"
let scores = []



async function fetchProducts()
{
    scores = (await axios.get(url+`score/all`)).data;
    console.log(scores)
}


function loadScores()
{
    document.querySelector("#highscore-sec").innerHTML = `
        <h1>Current highscores</h1>
    `
    document.querySelector("#highscore-sec").innerHTML += `
        <table id="score-table">
            <tr>
                <th>Username</th>
                <th>Score</th>
                <th>Time</th>
            </tr>
    `


    for (let score of scores) {
        console.log(score)
        document.querySelector("#score-table").innerHTML += `
        <tr>
            <td>${score.userName}</td>
            <td>${score.points}</td>
            <td>${score.timeStamp.replace("T", " ").replace(/-/g, "/")}</td>
        </tr>
        `
    }


    document.querySelector("#highscore-sec").innerHTML += `
    </table>`
}

async function loadPage() {
    await (fetchProducts())
    loadScores()
}

loadPage()