<!--Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi
in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i
dischi a php e li stamperà attraverso vue.
Bonus: Attraverso un’altra chiamata api, filtrare gli album per genere-->

<?php
$data = include("./data/data.php");

function getnPrint($element){
   $poster = $element["poster"];
   echo "<img src='$poster'>";
   $author = $element["author"];
   echo "<h2>$author</h2>";
   $title = $element["title"];
   echo "<h3>$title</h3>";
   $year = $element["year"];
   echo "<h5>$year</h5>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css?v=<?php echo time(); ?>"> <!--aggiorna chace ogni volta-->
    <title>php dischi</title>
</head>
<body>
    <div class="container">
         <?php foreach($data as $element){ ?>
            <div class="card">
            <?php  
                getnPrint($element);   
               ?>
            </div>
        
        <?php } ?>
    </div>
</body>
</html> 