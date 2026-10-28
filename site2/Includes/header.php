<?php
// Étape 8 : liens de navigation
$links = [
    "Accueil" => "index.php",
    "Connexion" => "connexion.php",
    "Déconnexion"    => "deconnexion.php",
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP - site2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Mon site</h1>
    <nav>
        <ul>
            <?php foreach ($links as $title => $href) : ?>
                <?= writeNavLine($title, $href) ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>