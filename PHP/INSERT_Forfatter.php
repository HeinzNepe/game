<?php
if(isset($_POST["leggtil"]))
{
    
 //Dette dokumentet legger inn i forfatter tabellen (ForfatterID, Fornavn og Etternavn)


    // Tilkoblingsinformasjon
    $tjener = "51.174.65.191:3306";
    $brukernavn = "HeinzConnection";
    $passord = "SuperSecure123";
    $database = "highscore";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn

 $FID = $_POST["ForfatterID"];
 $FF = $_POST["Fornavn"];
 $FE = $_POST["Etternavn"];

 $sql = "INSERT INTO forfatter (ForfatterID, Fornavn, Etternavn) VALUES ('$FID', '$FF', '$FE')";
  
if($kobling->query($sql)) {
    echo "Forfatter spørringen ble gjennomført.";
    } else {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
   
   
   }
   ?>