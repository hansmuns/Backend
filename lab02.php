
<h3> php lab 02</h3>
<?php
    $naam = "Karim";
    $nederlands = "8.5";
    $engels = "7.7";
    $rekenen = "6.7";
    $programmeren = "8.5";
    $databases = "9.4";
    $lijstt = array( $nederlands, $engels, $rekenen, $programmeren, $databases);
    $gemiddeldekarim = array_sum($lijstt) / count($lijstt);
$naam2 = "Sophie";
$nederlands2 = "8.9";
$engels2 = "8.7";
$rekenen2 = "9.7";
$programmeren2 = "9.5";
$database2 = "9.2";
$lijst = array( $nederlands2, $engels2, $rekenen2, $programmeren2, $database2);
$gemiddeldesophie = array_sum($lijst) / count($lijst);

$gemiddeld = array($gemiddeldekarim, $gemiddeldesophie);
$groep = array_sum($gemiddeld) / count($gemiddeld);
    echo "<table border='1'>
    <caption>
        <strong>rapport</strong>
        </caption>
        <thead>
        <tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>
        Gemiddeld</th></tr>
        </thead>
        <tbody>
        <tr>
        <td>$naam</td>
        <td>$nederlands</td>
        <td>$engels</td>
        <td>$rekenen</td>
        <td>$programmeren</td>
        <td>$databases</td>
        <td>$gemiddeldekarim</td>
        </tbody>
         <tbody>
        <tr>
        <td>$naam2</td>
        <td>$nederlands2</td>
        <td>$engels2</td>
        <td>$rekenen2</td>
        <td>$programmeren2</td>
        <td>$database2</td>
        <td>$gemiddeldesophie</td>
        </tbody>
        
        <tfoot>
        <tr><td colspan = '6'>Groep gemiddeld</td>
        <td>$groep</td></tr>
        </tfoot>
        </table>";
    ?>