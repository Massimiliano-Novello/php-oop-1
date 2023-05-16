<?php
require_once __DIR__ . "/models/movie.php";

$film = new movie("avengers", "azione");
$film2 = new movie ("La vita è bella", "drammatico");
$film3 = new movie ("Rush", "Azione")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Film stampati</h1>  
        
        <div class="text-center">
            <ul class="list-group">
                <li class="list-group-item"><?php echo ($film->nomeFilm()) ?></li>
                <li class="list-group-item"><?php echo ($film2->nomeFilm()) ?></li>
                <li class="list-group-item"><?php echo ($film3->nomeFilm()) ?></li>
            </ul>
        </div>
    </div>
</body>
</html>