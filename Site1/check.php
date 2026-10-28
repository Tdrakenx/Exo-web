<?php
require_once "includes/functions.php";
include "includes/header.php";

$pseudo = $_POST["pseudo"] ?? "";
$motDePasse = $_POST["mot_de_passe"] ?? "";
?>

<main>
    <?php if ($pseudo === "admin" && $motDePasse === "PHP") : ?>
        <p>Bonjour, vous êtes connecté</p>
    <?php else : ?>
        <p>Identifiants inconnus</p>
        <p><a href="login.php">Retour au formulaire</a></p>
    <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>