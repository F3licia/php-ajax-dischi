<!--Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi
in pagina: al caricamento della pagina ci saranno tutti i dischi.-->

<?php
$data = include("./data/data.php");

function getnPrint($data) {
 foreach($data as $element){
     $poster = $element["poster"];
     $title = $element["title"];
     $author = $element["author"];
     $genre = $element["genre"];
     $year = $element["year"];
    echo "<img src='$poster'>";
    echo "<h2>$author</h2>";
    echo "<h3>$title</h3>";
    echo "<h5>$year</h5>";
    echo "<p>$genre</p>";
   };  
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dischi</title>
</head>
<body>

<?php getnPrint($data) ?>
   
    
</body>
</html>