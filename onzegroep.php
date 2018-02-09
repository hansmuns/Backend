<?php


$naam = array (
    "0285236" => "Bas",
    "0298170" => "Renzo",
    "0299198" => "Dogukan",
    "0300636" => "Kevin",
    "0299446" => "Sanne",
    "03005586" => "Rami",
    "0298531" => "Hans"
);
$achternaam = array (
    "0285236" => "Leliefeld",
    "0300636" => "Nijkamp",
    "0299198" => "Ozturk",
    "0299446" => "Moerdijk",
    "0298170" => "Gerritzen",
    "03005586" => "Ramadan",
    "0298531" => "Muns"
);
$woonplaats = array (
    "0299446" => "Oldenzaal",
    "0298531" => "Borculo",
    "03005586" => "Vroomshoop",
    "0299198" => "Losser",
    "0285236" => "Borne",
    "0300636" => "Rijssen",
    "0298170" => "Losser"
);
$leeftijd = array (
    "0298170" => "17",
    "03005586" => "19",
    "0298531" => "16",
    "0300636" => "17",
    "0299446" => "17",
    "0285236" => "18",
    "0299198" => "16",
);
$leerlingnummer = array("0285236","0300636","0299198","0299446","0298170","03005586","0298531");


$random = $leerlingnummer [rand(0,6)];
echo "naam: " . $naam[$random] ."<br>". "achternaam: " .  $achternaam [$random] ."<br>". "woonplaats: " .
    $woonplaats[$random] ."<br>". "leeftijd: " .  $leeftijd [$random] ."<br>". "studentnummer: " .  $random;
