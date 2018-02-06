<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 6-2-2018
 * Time: 09:58
 */
echo <<<TEXT
<h1>Lokale Variable</h1>
Lokale variable is een variable die je alleen kan gebruiken in de fucntie waar je hem in creeërt.
<br>
<h1>Global Variable</h1>
Een global variable is een variable die je overal in het bestand kunt gebruiken.
<h1>Voorbeeld global variable</h1>

<br>
TEXT;
?>
<p>
$name = "Hans";
echo  "<p>name: $name </p>";
</p>
