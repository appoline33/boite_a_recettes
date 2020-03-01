<?php

session_start();

// var_dump($_POST);

?>

<!-- Formulaire de nouvelle recette -->
<div class="form_recette">
    <h1>Ajouter une recette</h1>
    <form action="addRecetteAction.php" method="post" class="addRecette">
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="text" placeholder="Titre de la recette" name="titre">
        <input type="text" placeholder="Ingrédients" name="ingredients">
        <input type="text" placeholder="Étapes" name="etapes">
        <input type="text" placeholder="Image" name="image" value="https://picsum.photos/200/300">
        <input type="submit" value="Ajouter">
    </form>
</div>


<!-- Retour à la page précédente -->
<form action="../recettes.php" method="post" class="retour_recette">
    <input type="submit" value="Retour" name="retour">
</form>