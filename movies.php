<?php
require_once(__DIR__ .'/config/mysql.php'); 
require_once(__DIR__ .'/databaseconnect.php'); 
require_once(__DIR__ .'/variables.php'); 

foreach ($movies as $movie) {
?>
<h1><?php echo $movie['title']; ?></h1>
<p><?php echo $movie['movie_link']; ?></p>
<?php
}


// $postData = $_POST;
// if (
// !isset($postData["email"])
// || !filter_var($postData["email"], FILTER_VALIDATE_EMAIL)
// || empty($postData["password"])
// || trim($postData["password"]) === ""
// ){
// echo("Merci de renseigner votre email et mot de passe");
// return;
// }
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
            <h1><?php echo $movie['title']; ?></h1>
            <h5 class="">Rappel de vos informations</h5>
            <p class=""><b>Bienvenue</b> : <?php echo $_POST['email']; ?></p>
        </div>
    </div>

</body>

</html>