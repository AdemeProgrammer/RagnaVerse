<?php
session_start();
session_destroy();
var_dump($_POST);
$inscription = new PDO('mysql:host=localhost;dbname=ragnaverse', 'root', '');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel_fixe = $_POST['tel_fixe'];
    $tel_portable = $_POST['tel_portable'];
    $cp = $_POST['cp'];
    $rue = $_POST['rue'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $req = $inscription -> prepare('INSERT INTO inscrit(nom,prenom,email,mot_de_passe,tel_fixe,tel_portable,rue,cp,ville) VALUES(:nom,:prenom,:email,:mot_de_passe,:tel_fixe,:tel_portable,:rue,:cp,:ville)');
    $req -> execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'mot_de_passe' => $mot_de_passe,
        'tel_fixe' => $tel_fixe,
        'tel_portable' => $tel_portable,
        'rue' => $rue,
        'cp' => $cp,
        'ville' => $ville
    ));

    echo "Votre compte a bien été inscrit !";
    header('Location: ConnexionRV.php');

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="InscriptionConnexionRV.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Inscription</h1>
<hr>
<form action ="InscriptionRV.php" method="post">
    <p>Entrer un nom :</p>
    <input type="text" name="nom">
    <p>Entrer un prenom :</p>
    <input type="text" name="prenom">
    <p>Entrer un numéro de téléphone fixe</p>
    <input type="tel" name="tel_fixe">
    <p>Entrer un numéro de téléphone portable</p>
    <input type="tel" name="tel_portable">
    <p>Entrer un code postal</p>
    <input type="number" name="cp">
    <p>Entrer une rue :</p>
    <input type="text" name="rue">
    <p>Entrer une ville :</p>
    <input type="text" name="ville">
    <p>Entrer un e-mail</p>
    <input type = "e-mail" name = "email">
    <p>Entrer votre mot de passe :</p>
    <input type="password" name="mot_de_passe">
    <input type = "submit" name ="validation">
    <a href ="ConnexionRV.php"><p>Déjà membre du Ragna Verse ?</p></a>
</form>
</body>
