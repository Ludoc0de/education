<?php
$postData = $_POST;

$loginMessage=null;
if (
    !isset($postData["email"]) 
    || !isset($postData["password"])
    || empty($postData["email"])
    || !filter_var($postData["email"], FILTER_VALIDE_EMAIL)
    || empty($postData["password"])
    ){
        $loginMessage="Merci de renseigner vos id";
} else {
    $loginMessage="Ok id";
}

// $loginMessage = null;

// if (!empty($_POST['nickname']) && !empty($_POST['pass'])) {
//     checkLogin($_POST['nickname'], $_POST['pass']);
//     $loginMessage = "identifiant ou mot de passe incorrect";

// } elseif (isset($_POST['nickname']) || isset($_POST['pass'])) {
//     $loginMessage = "merci de renseigner tous les champs";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- MENU -->
        <?php require_once(__DIR__ .'/header.php'); ?>
    </header>
    <section class="row mt-5">
        <form class="" action="" method="GET">
            <h1>Se connecter</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" placeholder="mot de passe">
            </div>
            <button type="submit" class="btn btn-dark button-login">Se connecter</button>
        </form>
        <?php 
        if($loginMessage){  
        ?>
        <p class="">
            test: <?php echo $loginMessage?>
        </p>
        <?php
        }
        ?>

        <div class="" id="">
            <ul class="">
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">S'enregistrer</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- FOOTER -->
    <?php require_once(__DIR__ .'/footer.php'); ?>
</body>

</html>