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

<div class="hidden">
    <a class="hidden">
        <div id="hid-img"></div>
    </a>
</div>

<section class="content-sec">
    <section class="game-sec">
        <div class="main-flex" id="main-content">
            <section class="about-sec">
                <h>The coin flip</h>
                <p>Hello. My name is Dr. Glenn Pierce</p>
            </section>

            <section class="game-sec">
                <!-- These buttons are going to let the player choose heads or tails -->
                <div>
                    <button class="button" onclick="guess(1)">Heads</button>
                    <button class="button" onclick="guess(0)">Tails</button>
                </div>
                <div>
                    <p id="guess-output"></p>
                    <p id="game-output"></p>
                </div>
                <!-- This button starts the toss function linked underneath-->
                <button class="button" onclick="tossfunction()">Flip a coin</button>
                <script src="JS/index.js"></script>
            </section>

            <section class="highscore-sec">
                <h1>Current highscores</h1>

                <!--Include the php thing (DONT MESS WITH THIS PLEASE)-->
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
    <script>console.log("Header Loaded");$("#header-pre").load("//topheinz.com/sections/header.html");</script>
    <script>console.log("Footer Loaded");$("#footer-pre").load("//topheinz.com/sections/footer.html");</script>

</section>
</body>
</html>