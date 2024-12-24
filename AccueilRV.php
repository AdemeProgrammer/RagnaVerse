<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: exoPDOConnexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="InscriptionConnexionRV.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Accueil de : <?= $_SESSION['email']?></h1>
<hr>
<p>Bienvenue sur le Ragna Verse cher chasseur de dragon !</p>
<p>Sur ce site, vous pourrez retrouver de nombreuses informations sur l'oeuvre Ragna Crimson et vous pourrez même commander les tomes officiels.</p>
<p>Bla bla bla...</p>

</form>
<a href ="InscriptionRV.php"><p>Revenir à l'inscription</p></a>
<a href ="Connexionrv.php"><p>Revenir à la connexion</p></a>
</body>
</html>