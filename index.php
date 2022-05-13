<?php

include "Movie.php";

$movie1 = new Movie(
  "The Matrix",
  1999,
  "http://ia.media-imdb.com/images/M/MV5BMTkxNDYxOTA4M15BMl5BanBnXkFtZTgwNTk0NzQxMTE@._V1_SX214_AL_.jpg",
  [5, 5, 5, 3, 5]
);
$movie2 = new Movie(
  "The Batman",
  2022,
  "https://image.tmdb.org/t/p/w342/8o1R5QU797hcLuvU4M9F3rOBGEY.jpg",
  [5, 5, 5, 5, 5]
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .cards-row{
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }
    .card {
        width: 300px;
        height: 400px;
        }
    .poster {
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <h1>Movies</h1>
    <div class="cards-row">
        <?php echo $movie1->getCard(); ?>
        <?php echo $movie2->getCard(); ?>

    </div>

    
</body>
</html>