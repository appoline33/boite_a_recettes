<!-- Lien vers le css -->
<link rel="stylesheet" href="dist/css/style.css">


<!-- Connexion de session -->
<?php
session_start();
?>


<!-- Nav bar -->
<div class="navbar">
    <!-- Bouton de déconnexion -->
    <a href="functions/disconnect.php" class="disconnect">Déconnexion</a>
</div>


<h1>Recettes</h1>


<!-- Afficher les recettes -->
<?php
// 1. Connection à la base de données
require("functions/database.php");
// 2. Préparer la requête (SELECT)
$req = $db->prepare("SELECT pseudo, titre, ingredients, etapes, image FROM recettes WHERE pseudo = :pseudo");
$req->bindParam(":pseudo", $_SESSION["pseudo"]);
// 3. Éxecuter la requête
$req->execute();
// 4. Afficher la recette
    while($result = $req->fetch(PDO::FETCH_ASSOC)){ // FETCH sert à parcourir chaque ligne et chaque colonne de la base de données
?>
                
<!-- Affichage des éléments de la recette -->
        <div class="recette">
            <div class="pseudo"><?= $result["pseudo"] ?></div>
            <div class="titre"><?= $result["titre"] ?></div>
            <div class="ingredients"><?= $result["ingredients"] ?></div>
            <div class="etapes"><?= $result["etapes"] ?></div>
            <img src="<?= $result["image"] ?>" alt="US Cookies">
        </div>

<?php
    }
?>
