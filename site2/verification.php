<?php
require_once "includes/functions.php";
include "includes/header.php";

$pseudo = $_POST["pseudo"] ?? "";
$motDePasse = $_POST["mot_de_passe"] ?? "";
?>

<main>
    <?php if ($pseudo === "admin" && $motDePasse === "PHP") : ?>
        <p>Voici votre contenu privé</p>
    <?php else : ?>
        <p>Contenu non disponible</p>
        <p><a href="index.php">Retour au formulaire</a></p>
    <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>