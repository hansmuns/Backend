<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 7-2-2018
 * Time: 11:37
 */

$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dice3 = rand(1,6);
$dice4 = rand(1,6);
$dice5 = rand(1,6);
$totaal = $dice1+$dice2+$dice3+$dice4+$dice5;
$array = array( $dice1, $dice2, $dice3, $dice4, $dice5);
echo <<<TEKST
<form> <button onclick="$dice1; $dice2; $dice3; $dice4; $dice5">Roll</button><br>
 $dice1<br>
 $dice2<br>
 $dice3<br>
 $dice4<br>
 $dice5<br>
 <br>
 Totaal: $totaal
 </form>
TEKST;



