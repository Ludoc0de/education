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
        <form class="col-6 offset-3" action="signup.php" method="post">
            <h1>S'inscrire</h1>
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="mot de passe">
            </div>
            <button type="submit" class="button-login"> Enregistrer</button>
        </form>
        <div class="" id="">
            <ul class="">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Se connecter</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- FOOTER -->
    <?php require_once(__DIR__ .'/footer.php'); ?>
</body>

</html>