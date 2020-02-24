<?php

session_start();

if(!isset(&_SESSION['admin']) OR !&_SESSION['admin']) {
    header('Location: ../index.php')
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
                        <li><a class="head__link active" href="../index.php">Retour sur l'accueil</a></li>
                    </ul>
                </nav>
            </div>

        <nav class="Compte_Gestion">
            <ul class="head__list">
                <li class="head__list-item">
                    <a class="head__link ul--btn" href="#">Se connecter</a>
                 </li>
                <li class="head__list-item">
                    <a class="head__link ul--btn ul--btn--highlight" href="#">S'enregistrer</a>
                 </li>
            </ul>
      </nav>
    </header>

    <main>
</body>
</html>