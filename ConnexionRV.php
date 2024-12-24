<?php
session_start();
session_destroy();
if (isset($_POST['mot_de_passe'])){
    $bdd = new PDO('mysql:host=localhost;dbname=ragnaverse', 'root', '');

    $req = $bdd -> prepare('SELECT * FROM Inscrit WHERE email = :email AND mot_de_passe = :mot_de_passe');
    $req -> execute(array(
        'email' => $_POST['email'],
        'mot_de_passe' => $_POST['mot_de_passe']
    ));
    $connexion = $req -> fetch();
    session_start();
    $_SESSION['email'] = $connexion['email'];
    $_SESSION['id_inscrit'] = $connexion['id_inscrit'];
    if ($connexion ['email'] == $_POST['email'] && $connexion['mot_de_passe'] == $_POST['mot_de_passe']){
        header("location:AccueilRV.php");
    }
    else{
        session_destroy();
        header("location:ConnexionRV.php");
    }
}
?>
<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="InscriptionConnexionRV.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Connexion</h1>
<hr>
<form action ="ConnexionRV.php" method="post">
    <p>Entrer un e-mail</p>
    <input type = "e-mail" name = "email">
    <p>Entrer votre mot de passe :</p>
    <input type="password" name="mot_de_passe">
    <input type = "submit" name ="validation">
</form>
<a href ="InscriptionRV.php"><p>Vous n'êtes pas membre du Ragna Verse ?</p></a>
</body>
</html>