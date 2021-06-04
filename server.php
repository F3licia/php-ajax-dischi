<?php
include("./data/dischi.php");

header("Content-type: application/json"); //specifico il tipo di dati da restituire
echo json_encode($data);

//http://localhost/boolean/php-ajax-dischi/