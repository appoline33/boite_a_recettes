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
        <div class="container">
            <div class="recette">
                <!-- Partie textuelle de la recette -->
                <div class="texte">
                    <div class="pseudo"><?= $result["pseudo"] ?></div>
                    <div class="titre"><?= $result["titre"] ?></div>
                    <div class="ingredients">
                        <h2>Ingrédients</h2>
                        <?= $result["ingredients"] = str_replace(",", "<br>", $result["ingredients"])?>
                    </div>
                    <div class="etapes">
                        <h2>Étapes</h2>
                        <?= $result["etapes"] = str_replace(".", "<br><br>", $result["etapes"])?>
                    </div>
                </div>
                <!-- Partie visuelle de la recette -->
                <div class="image">
                    <img src="<?= $result["image"] ?>" alt="visuel inaccessible">
                </div>
            </div>
        </div>

<?php
    }
?>

<!-- Remplacer les "," par des retours à la ligne dans la recette -->
<?php
// $remplace = str_replace(",", "</br>", "etapes");
// $remplace = str_replace(",", "\n", "etapes");


// $req2 = $db->prepare("UPDATE recettes SET etapes = REPLACE (etapes, ',', '</br>') WHERE etapes LIKE '%,%'");

// $remplacant="TEST";
// $remplacer=",";
// $remplace=str_replace($remplacant,$remplacer,$remplace);

// $result = preg_replace(",","  TEST  ", "etapes");
// $result=preg_replace("/\r/","\n", $result);
// echo preg_replace(","," TEST  ", $result);

?>
