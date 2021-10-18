<!DOCTYPE html>

<!--Dette er siden for å få tilgang til alt i nettsiden min som har med PHP å gjøre-->

<html lang="en" lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">

    <!--Website tab icon-->
    <link rel="icon" href="../mainbilder/minilogo.png">
    <title>Henrik Hub</title>
</head>
<body>

    <!--Selve siden er her-->
    <section id="page">

        <!--Meny og dropdown meny er her-->
        <div class="header"> <div class="homebtn"> <a href="../../index.html">Henrik's Hub</a></div> </div>

        <div class="header-menu">
            <!--Her er dropdown menyen-->
            <div class="dropdown">
                <button class="dropbtn">Fag</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/teknologiforstaelse/tekno.html">Teknologiforståelse</a>
                    <a href="../undernettsider/404.html">Konsept og koding</a>
                    <a href="../undernettsider/prod-his-form/prod-his-form.html">Historie og prod</a>
                    <a href="../undernettsider/404.html">Naturfag</a>
                    <a href="../undernettsider/404.html">Engelsk</a>
                    <a href="../undernettsider/404.html">Kroppsøving</a>
                    <a href="../undernettsider/404.html">Matte</a>
                </div>
            </div>  

            <div class="dropdown">
                <button class="dropbtn">Annet skolerelatert</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/tverrfaglig/tver-video-main.html">Tverrfaglige videoer</a>
                    <a href="../undernettsider/tverrfaglig/stream.html">Stream</a>
                    <a href="#">PHP</a>
                </div>
            </div>

        </div>


        <!--Left space og right space gir mellomrommet på sidene-->
        <div class="left-space"></div>
        <div class="right-space"></div>
        <main>

            <!--Her er innholdet på siden -->
            <h1 class="headmain">PHP controlsite</h1> <br />
            <div class="paramain">

             <h1>Legge inn kilder i databasen</h1>

             <!--Legger inn php (legg inn i databasen og nåværende innhold i databasen)-->
            <?php

            include 'database.php';

            include 'Select_Oversikt1.php'
             ?>
            </div>





        </main>  
        <div class="footer"><p class="fotp">Henrik made this</p></div>
    </section>

</body>
</html>