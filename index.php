<!DOCTYPE html>
<!-- Reuse html code -->
<!-- https://medium.com/@AmyScript/how-to-reduce-reuse-and-recycle-your-code-389e6742e4ac -->

<!-- Flexbox ting -->
<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss3_flexbox_website2 -->

<html lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="//topheinz.com/CSS/main.css">
    <link rel="stylesheet" type="text/css" href="//topheinz.com/CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/php.css"



    <!--Website tab icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="//topheinz.com/mainbilder/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="//topheinz.com/mainbilder/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="//topheinz.com/mainbilder/favicon/favicon-16x16.png">
    <link rel="manifest" href="//topheinz.com/mainbilder/favicon/site.webmanifest">
    <link rel="mask-icon" href="//topheinz.com/mainbilder/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="//topheinz.com/mainbilder/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff0000">
    <meta name="msapplication-config" content="//topheinz.com/mainbilder/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <title>Henrik Hub</title>

</head>
<body>
<header>
    <div id="header-pre"></div>
</header>


<section class="content-sec">
    <section class="game-sec">
        <div class="main-flex" id="main-content">
            <section class="about-sec">
                <h>A coin has been tossed</h>
                </br>
                <p>On which side will it land?</p>
            </section>

            <section class="game-sec">
                <div id="nameinput-sec">
                    <form class="form" method="get">
                        <p>Name</p>
                        <input id="name-input" placeholder="Input name here" type="text" name="GamerTag">

                        <input id="nameset-button" type="submit" onclick="namesubmit()" name="setname" value="Set name">
                    </form>
                </div>

                <!-- Form that the js uses to send data to database -->
                <form id="f1" method="POST">
                    <input type="hidden" id="p1" name="GamerTag">
                    <input type="hidden" id="p2" name="Score">
                    <input type="hidden" id="p3" name="sender" value="">
                </form>
                <?php
                    require($_SERVER['DOCUMENT_ROOT']."/PostResult.php");
                ?>

                <!-- These buttons are going to let the player choose heads or tails -->
                <div class="ui">
                    <button class="button" onclick="guess('Heads')">Heads</button>
                    <button class="button" onclick="guess('Tails')">Tails</button>
                </div>

                <!-- Outputs game statistics. Guess, Score and Highscore -->
                <div>
                    <div class="outputs">
                        <div>
                            <p>Score:</p>
                            <p id="game-output">0</p>
                        </div>

                        <div>
                            <p>Highscore:</p>
                            <p id="highscore-output">0</p>
                        </div>
                    </div>

                    <p>Your answer:</p></br>
                    <p id="guess-output">Flip the coin, and you will find out</p>
                </div>

                <!-- Imports the js -->
                <script src="JS/index.js"></script>
            </section>

            <!-- Section for loading the highscores -->
            <section class="highscore-sec">
                <h1>Current highscores</h1>

                <!--(DONT MESS WITH THIS PLEASE)-->
                <?php
                require($_SERVER['DOCUMENT_ROOT']."/Oversikt1.php");
                ?>
            </section>

            <footer>
                <div id="footer-pre"></div>
            </footer>
        </div>
    </section>
</section>

<section class="scripts">

    <!-- Script import -->
    <script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- JQuery -->
    <script>$("#header-pre").load("//topheinz.com/sections/header.html");console.log("Header Loaded");</script>
    <script>$("#footer-pre").load("//topheinz.com/sections/footer.html");console.log("Footer Loaded");</script>

</section>
</body>
</html>