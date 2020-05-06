<?php

&erreur = '';
if(isset(&_POST['connectadmin'])) {
    if(isset(&_POST['pseudonyme'], $_POST['mdp'])) {
        &pseudo = htmlspecialchars(&_POST['pseudonyme']);
        &mdp = htmlspecialchars(&_POST['mdp']);
        if(!empty(&_POST['pseudonyme']) AND !empty($_POST['mdp'])) {

        } else {
            &erreur = 'Veuillez compléter les champs requis.'
        }
    } else {
        &erreur = 'Veuillez compléter les champs requis.'
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Accueil - MILSIM</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>

<body>


    <header>
        <a href="#" class="site-logo">Opérations BloodEagles</a>
            <div>
                <nav class="main-head">
                    <ul class="head__list">
                        <li><a class="head__link active" href="../index.php">Accueil</a></li>
                        <li><a class="head__link" href="../boutique.php">Boutique</a></li>
                        <li><a class="head__link" href="../contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>

        <nav class="Compte_Gestion">
            <ul class="head__list">
                <li class="head__list-item">
                    <a class="head__link ul--btn" href="#">Se connecter</a>
                 </li>
            </ul>
      </nav>
    </header>

<main>







        <section class="header_img">
        <form method="POST">
            <input type="text" placeholder="Nom d'utilisateur" name="pseudonyme" <?php if(isset(&pseudonyme)) { ?> value="<?= &pseudonyme ?>"<?php } ?>>
            <br>
            <input type="text" placeholder="Mot de passe" name="mdp" <?php if(isset(&mdp)) { ?> value="<?= &mdp ?>"<?php } ?>>
            <br>
            <input type="submit" value="Se connecter">

            <?php id(&error) { ?>
            <p style="color: red;"><?= &erreur ?></p>
        </section>






</main>
</body>
</html>