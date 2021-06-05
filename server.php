<?php
include("./data/dischi.php");
include("./utilities/filterFunction.php");


$fGenre = isset($_GET["genre"]) ? $_GET["genre"] : null;


$filters = [
    "genre" => $fGenre
];



$newdata = filter($data, $filters);

header("Content-type: application/json"); //specifico il tipo di dati da restituire
 echo json_encode($newdata);

