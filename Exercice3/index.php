<?php
if (isset($_POST['name']) && $_POST['password']) {
    $temps = 365 * 24 * 3600;
    setcookie("name", $_POST['name'], time() + $temps, '/', null, false, true);
    setcookie("password", $_POST['password'], time() + $temps, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 8 Exercice 3</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="name">Name :</label> <input type="text" name="name">
            <label for="password">Password :</label><input type="password" name="password">
            <input type="submit" value="Valider">
        </form>
        <?php
        echo $_COOKIE['name'] . ' ' . $_COOKIE['password'];
        ?>
        <a href="../index.php">Retour</a>
    </body>
</html>
