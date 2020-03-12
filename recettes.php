<!-- Lien vers le css -->
<link rel="stylesheet" href="dist/css/style.css">


<!-- Connexion de session -->
<?php
session_start();
?>


<!-- Nav bar -->
<div class="navbar">
    <!-- Titre du site -->
    <div class="titre_site_2">
        <p>La Boîte à recettes</p>
    </div>
    <!-- Bouton de déconnexion -->
    <a href="functions/disconnect.php" class="disconnect">Déconnexion</a>
</div>


<h1>Recettes</h1>


<!-- Ajouter une recette -->
    <form action="functions/addRecette.php" method="post" class="ajouter_recette">
        <input type="submit" value="Ajouter une recette" name="addRecette">
    </form>


<!-- Afficher les recettes -->
<?php
// 1. Connection à la base de données
require("functions/database.php");
// 2. Préparer la requête (SELECT)
$req = $db->prepare("SELECT id, pseudo, titre, ingredients, etapes, image FROM recettes WHERE pseudo = :pseudo ORDER BY id DESC");
$req->bindParam(":pseudo", $_SESSION["pseudo"]);
// 3. Éxecuter la requête
$req->execute();
// 4. Compter le nombre de résultats renvoyés par la requête
$count = $req->rowCount();
// 5. Effectuer une condition pour la page 404
if($count == 0){
    echo "Pas de recettes encore enregistrées";
}else{
    // 6. Afficher la recette
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
                        <ul class= "list_style">
                            <?= $result["ingredients"] = str_replace(",", "<li>", $result["ingredients"])?>
                        </ul>
                    </div>
                    <div class="etapes">
                        <h2>Étapes</h2>
                        <ul class= "list_style">
                            <?= $result["etapes"] = str_replace(".", "<br><br><li>", $result["etapes"])?> 
                        </ul>
                    </div>
                </div>
                <!-- Partie visuelle de la recette -->
                <div class="image">
                    <img src="<?= $result["image"] ?>" alt="visuel inaccessible">
                </div>
            </div>


            <div class="boutons">
                <!-- Supprimer une recette -->
                <div class="delete_recette">
                    <a href="functions/deleteRecette.php?recette_id=<?= $result["id"] ?>">Supprimer la recette</a>
                </div>


                <!-- Dupliquer une recette -->
                <div class="duplicate_recette">
                    <a href="duplicateRecetteForm.php?recette_id=<?= $result["id"] ?>&ingredients=<?= $result["ingredients"] ?>&etapes=<?= $result["etapes"] ?>&image=<?= $result["image"] ?>">Dupliquer la recette</a>
                </div>
            </div>
    
<?php
    }
}
?>
