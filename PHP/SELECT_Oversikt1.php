<!DOCTYPE html>
<html lang="en">
<head>
    <!--TODO Link til stylesheeten sånn at det er rutenett og padding-->
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   
<?php

 //Lager tabellen   

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
 else {
echo "Koblingen virker"; }


 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT *";
$resultat = $kobling->query($sql);
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>Beskrivelse</th>";
 echo "<th>Kilde</th>";
 echo "<th>Fornavn</th>";
 echo "<th>Etternavn</th>";
 echo "<th>Dato</th>";
 echo "<th>Forfatter ID</th>";
 echo "<th>Artikkel ID</th>";


echo "</tr>";

while($rad = $resultat->fetch_assoc()) {
    $Dato= $rad["Date"];
    $FID = $rad["ForfatterID"];
    $FF = $rad["Fornavn"];
    $FE = $rad["Etternavn"];
    $AID = $rad["ArtikkelID"];
    $Kilde = $rad["Kilde"];
    $ABeskrivelse = $rad["Beskrivelse"];
   
    echo "<tr>";
    echo "<td>$ABeskrivelse</td>";
    echo "<td>$Kilde</td>";
    echo "<td>$FF</td>";
    echo "<td>$FE</td>";
    echo "<td>$Dato</td>";
    echo "<td>$AID</td>";
    echo "<td>$FID</td>";
   
    echo "</tr>";
   }
   echo "</table>"; // Avslutter tabellen
   ?>

</body>
</html>