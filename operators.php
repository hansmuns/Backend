<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 7-2-2018
 * Time: 10:07
 */

$getal1 = 824;
$getal2 = 421;
$som= $getal1 + $getal2;
$min= $getal1 - $getal2;
$keer= $getal1 * $getal2;
$deel= $getal1 / $getal2;
$modulus= $getal1 % $getal2;

echo <<<TEKST
getal1 = $getal1 <br>
getal2 = $getal2 <br>
<br>
getal 1 + getal 2 = $som <br>
getal 1 - getal 2 = $min <br>
getal 1 * getal 2 = $keer <br>
getal 1 / getal 2 = $deel <br>
getal 1 % getal 2 = $modulus <br>

TEKST;


