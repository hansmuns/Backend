<?php
/**
 * Created by PhpStorm.
 * User: Hans Muns
 * Date: 9-2-2018
 * Time: 10:06
 */
$playlist = array (
    array ("genre" => "hiphop", "auteur" => "John Williams", "titel" => "My Girl"),
    array ("genre" => "jazz", "auteur" => "John Coltrane", "titel" => "New York"),
    array ("genre" => "hiphop", "auteur" => "Shakira", "titel" => "Obsession")
);

function printtracks($item, $key)
{

    echo "<br>track $key" . ":" . $item['genre'] . '|' . $item['auteur'] . '|' . $item['titel'];

}

array_push($playlist, array("genre" => "Latin", "auteur" => "Caestano Veloso", "titel" => "Cafe Atlantico"));
array_walk($playlist, 'printtracks');

echo "<br><br><br><br>";

function doorloop($item, $key)
{

    echo "<br> $key: $item";

}

array_walk_recursive($playlist, 'doorloop');
