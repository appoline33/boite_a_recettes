<!-- Lien vers le css -->
<link rel="stylesheet" href="dist/css/style.css">


<?php
var_dump($_GET);
?>


<!-- Création d'un formulaire -->
<div class="form-duplicate">
    <h1>Dupliquer la recette</h1>
    <form action="functions/duplicateRecette.php" method="post">
        <input type="text" placeholder="Titre de la recette" name="new_title"> 
        <input type="hidden" name="recette_id" value="<?php echo $_GET["recette_id"]; ?>">
        <input type="hidden" name="ingredients" value="<?php echo $_GET["ingredients"]; ?>">
        <input type="hidden" name="etapes" value="<?php echo $_GET["etapes"]; ?>">
        <input type="hidden" name="image" value="<?php echo $_GET["image"]; ?>">
        <input type="submit" value="Dupliquer la recette">
    </form>
</div>