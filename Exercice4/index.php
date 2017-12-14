<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 8 Exercice 4</title>
    </head>
    <body>
        <?php
        echo 'Votre nom : ' . $_COOKIE['name'];
        ?>
        <br/>
        <?php
        echo ' et votre mot de passe est ' . $_COOKIE['password'];
        ?>
        <a href="../index.php">Retour</a>
    </body>
</html>
