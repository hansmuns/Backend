<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 9-2-2018
 * Time: 09:23
 */

$twente = array (
    "heracles" => array (12, "Heracles", "Almelo", 22, 6, 6, 10),
    16,
    "FC Twente",
    "Enschede",
    22,
    4,
    4,
    14
);

$Heracles = $twente["heracles"];

echo <<<Tekst
<h1>$twente[1]</h1><br>
Stad van de club: $twente[2]<br>
positie in eredivisie: $twente[0]<br>
Aantal gespeelde wedstrijden: $twente[3]<br>
Aantal gewonnen wedstrijden: $twente[4]<br>
Aantal gelijk gespeelde wedstrijden: $twente[5]<br>
Aantal verloren wedstrijden: $twente[6]<br>
<br>
<br>
<h1>$Heracles[1]</h1><br>
Stad van de club: $Heracles[2]<br>
positie in eredivisie: $Heracles[0]<br>
Aantal gespeelde wedstrijden: $Heracles[3]<br>
Aantal gewonnen wedstrijden: $Heracles[4]<br>
Aantal gelijk gespeelde wedstrijden: $Heracles[5]<br>
Aantal verloren wedstrijden: $Heracles[6]<br>
Tekst;
