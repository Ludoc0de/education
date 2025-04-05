<?php
require_once(__DIR__ .'/config/mysql.php'); 
require_once(__DIR__ .'/databaseconnect.php'); 
require_once(__DIR__ .'/variables.php'); 
require_once(__DIR__ .'/functions.php'); 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training</title>
</head>

<body>
    <h1>Movie Training!</h1>
    <div class="">
        <div class="">
            <h1>title</h1>
            <?php foreach (getMovies($movies) as $movie) : ?>
            <article>
                <h3><?php echo $movie['title']; ?></h3>
                <div><?php echo $movie['movie_link']; ?></div>
                <i><?php echo displayAuthor($users); ?></i>
            </article>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>