<?php
$data = include("./data/return.php");

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