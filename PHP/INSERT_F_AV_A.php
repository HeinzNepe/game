<?php
if(isset($_POST["leggtil"]))
{

 //Dette dokumentet legger inn tiden noe blir lagt inn

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
 $AID = $_POST["ArtikkelID"];
 $FID = $_POST["ForfatterID"];


 $sql = "INSERT INTO forfatter_has_artikler(Forfatter_ForfatterID, Artikler_ArtikkelID) VALUES ('$FID', '$AID')";
 if($kobling->query($sql)) {
 echo "F_av_A spørring ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
 }


}
?>