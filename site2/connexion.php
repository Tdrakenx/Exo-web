<?php
include "includes/header.php";
?>

<main>

    <?php
    if (isset($_GET["message"]) && !empty($_GET["message"])) : ?>
        <p>Votre message est : <?= htmlspecialchars($_GET["message"]) ?></p>
    <?php endif; ?>

    <h2>Connexion</h2>

    <!-- Méthode POST : le mot de passe n'apparaît pas dans l'URL -->
    <form method="post" action="verification.php">
        <p>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo">
        </p>
        <p>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe">
        </p>
        <button type="submit">Se connecter</button>
    </form>

</main>

<?php include "includes/footer.php"; ?>