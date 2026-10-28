<?php
// Étape 2 : variables
$message = "Bienvenue sur mon site";
$age = 20;
$texte = "Tu as " . $age . " an";

// Étape 3 : opérateur ternaire pour le "s"
$texte = "Tu as " . $age . " an" . ($age > 1 ? "s" : "");

if ($age > 17) {
    $phrase = "Tu es majeur(e)";
} else {
    $phrase = "Tu es mineur(e)";
}

// Étape 4 : tableau de fruits
$fruits = ["Banane", "Fraise", "Orange", "Kiwi"];

// Étape 6 : tableaux associatifs
$user1 = ["name" => "Dupont", "firstname" => "Marie", "email" => "marie.dupont@example.com"];
$user2 = ["name" => "Martin", "firstname" => "Paul", "email" => "paul.martin@example.com"];
$user3 = ["name" => "Durand", "firstname" => "Sophie", "email" => "sophie.durand@example.com"];
$users = [$user1, $user2, $user3];

require_once "includes/functions.php";
include "includes/header.php";
?>

<main>
    <!-- Étape 2 -->
    <h2><?= $message ?></h2>
    <p><?= $texte ?></p>
    <p><?= $phrase ?></p>

    <!-- Étape 4 -->
    <h3>Les fruits</h3>
    <?php
    // var_dump($fruits);
    ?>
    <p>Index 0 : <?php echo $fruits[0]; ?></p>
    <p>Index 2 : <?php echo $fruits[2]; ?></p>

    <ul>
        <?php foreach ($fruits as $fruit) : ?>
            <li><?= $fruit ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Étape 5 : table Nom / Couleur -->
    <table>
        <thead>
            <tr><th>Nom</th><th>Couleur</th></tr>
        </thead>
        <tbody>
            <?php foreach ($fruits as $fruit) :
                switch ($fruit) {
                    case "Banane":
                        $couleur = "jaune";
                        break;
                    case "Fraise":
                        $couleur = "rouge";
                        break;
                    case "Orange":
                        $couleur = "orange";
                        break;
                    case "Kiwi":
                        $couleur = "vert";
                        break;
                    default:
                        $couleur = "";
                }
            ?>
                <tr>
                    <td><?= $fruit ?></td>
                    <td class="<?= $couleur ?>"><?= $couleur ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Étape 6 : listes de clés/valeurs -->
    <h3>Utilisateurs (listes)</h3>
    <?php foreach ([$user1, $user2, $user3] as $user) : ?>
        <ul>
            <?php foreach ($user as $key => $value) : ?>
                <li><?= $key ?> : <?= $value ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

    <?php
    var_dump($users);
    ?>

    <!-- Étape 7 : table des utilisateurs -->
    <h3>Utilisateurs (table)</h3>
    <table class="users">
        <thead>
            <tr><th>Nom</th><th>Prénom</th><th>Email</th></tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= htmlspecialchars($user["name"]) ?></td>
                    <td><?= htmlspecialchars($user["firstname"]) ?></td>
                    <td><a href="mailto:<?= htmlspecialchars($user["email"]) ?>"><?= htmlspecialchars($user["email"]) ?></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include "includes/footer.php"; ?>