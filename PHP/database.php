<?php
 //Linker til underfilene
 //Bestemmer også input typen i de forskjellige boksene
// Tilkoblingsinformasjon
$tjener = "51.174.65.191:3306";
$brukernavn = "HeinzConnection";
$passord = "SuperSecure123";
$database = "highscore";
 ?>

</p>
<form method="POST">
 <input type="number" name="ForfatterID">
 Forfatter ID
 </p>
 <input type="text" name="Fornavn">
 Forfatter fornavn
 </p>
 <input type="text" name="Etternavn">
 Forfatter etternavn
 </p>
 <input type="number" name="ArtikkelID">
 Artikkel ID
 </p> 
 <input type="text" name="Kilde">
 Kilde
 </p>
 <input type="text" name="Beskrivelse">
 Beskrivelse
 </p>
 <input type="submit" name="leggtil" value="Legg til">
</form>