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

        <div class="champs">

            
            <div class="part_1">
                <input type="text" placeholder="Titre de la recette" name="titre">
                <input type="textarea" placeholder="Ingrédients" name="ingredients">
            </div>
            <div class="part_2">
                <input type="text" placeholder="Image" name="image" value="https://picsum.photos/200/300">
                <input type="textarea" placeholder="Étapes" name="etapes">
            </div>


        </div>
        <input type="submit" value="Ajouter" class="input_ajouter">
    </form>
</div>


<!-- Retour à la page précédente -->
<form action="../recettes.php" method="post" class="retour_recette">
    <input type="submit" value="Retour" name="retour">
</form>