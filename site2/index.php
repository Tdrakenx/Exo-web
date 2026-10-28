
<?php
$message1 = "Contenu non disponible";
$message2 = "Voici votre contenu privé";

include "includes/header.php";
?>

<main>
    <?php if ($pseudo === "admin" && $motDePasse === "PHP") : ?>
    <h2><?= $message1 ?></h2>
    <?php else : ?>
    <h2><?= $message2 ?></h2>
    <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>