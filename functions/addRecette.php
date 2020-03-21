<!-- Lien vers le css -->
<link rel="stylesheet" href="../dist/css/style.css">

<?php

session_start();

// var_dump($_POST);

?>

<!-- Formulaire de nouvelle recette -->
<div class="form_recette">
    <h1>Ajouter une recette</h1>
    <form action="addRecetteAction.php" method="post" class="addRecette">
        <!-- Pseudo -->
        <input type="text" placeholder="Pseudo" name="pseudo" class="input_pseudo">

        <!-- Formulaire -->
        <div class="champs">
            <!-- Colonnes de gauche -->
            <div class="part_1">
                <input type="text" placeholder="Titre de la recette" name="titre">
                <div class="titre_ingredients">
                    <h3>Ingrédients</h3>
                    <input type="textarea" placeholder="À séparer avec des virgules">
                </div>
            </div>
            <!-- Colonnes de droite -->
            <div class="part_2">
                <input type="text" placeholder="Image" name="image" value="https://picsum.photos/200/300">
                <div class="titre_etapes">
                    <h3>Étapes</h3>
                    <input type="textarea" placeholder="À séparer avec des virgules" name="etapes">
                </div>
            </div>

        <!-- Bouton d'envoie -->
        </div>
        <input type="submit" value="Ajouter" class="input_ajouter">
    </form>
</div>


<!-- Retour à la page précédente -->
<form action="../recettes.php" method="post" class="retour_recette">
    <input type="submit" value="Retour" name="retour">
</form>