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
    <link href="AccueilRV.css" rel="stylesheet">
</head>
<body>
<hr>
<h1>Les musiques</h1>
<hr>
<p>Les musiques de Ragna Crimson sont vraiment toutes des bangers !!!</p>
<br>
<p>Le premier opening : </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/92EdADPf38M?si=cGfLrc8seEtixDVi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<br>
<p>Le deuxième opening :</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/KamznH5elvY?si=k-M7WcxiwQEMTpco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<br>
<p>Le deuxième opening (variation) :</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/FVwl6C-meA4?si=sBCUCqQDjAitoXzR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<br>
<p>Le premier ending : </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/m98SPN39tLM?si=JFg10u91_8VAw-6h" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<br>
<p>Le deuxième ending :</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/05aIHZT980w?si=stBzHa9mcsluCVxB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
<br>
<p>Le deuxième ending (variation) :</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/-VTXpVR81lg?si=nDLreFDggiSiE4BU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</form>
<hr>
<a href="AccueilRV.php">Revenir à l'accueil</a>
<a href ="InscriptionRV.php"><p>Revenir à l'inscription</p></a>
<a href ="Connexionrv.php"><p>Revenir à la connexion</p></a>
<hr>
</body>
</html>