

<?php
if(isset($_POST["leggtil"]))
{

    //Dette dokumentet legger inn i Artikkel tabbelen (ArtikkelID, Kilde og Beskrivelse)

    // Tilkoblingsinformasjon
    $tjener = "51.174.65.191:3306";
    $brukernavn = "HeinzConnect";
    $passord = "PrivateSQL123Password";
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

    $GT = $_POST["GamerTag"];
    $S = $_POST["Kilde"];
    $ABeskrivelse = $_POST["Beskrivelse"];

    $sql = "INSERT INTO t.highscore (name, score) VALUES ('$GT', '$S')";

    //Viser om spørringen ble gjennomført
    if($kobling->query($sql)) {
        echo "ArtikkelID spørring ble gjennomført.";
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }


}
?>