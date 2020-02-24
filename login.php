<!-- Lien vers le css -->
<link rel="stylesheet" href="dist/css/style.css">


<?php
// Vérifier s'il existe déjà une session et si c'est le cas rediriger vers recettes.php
session_start();

if(isset($_SESSION["pseudo"])){
    // header("Location: recettes.php");
}
?>


<!-- Titre du site -->
<div class="titre_site">
    <p>La Boîte à recettes</p>
</div>


<!-- Formulaire de connexion de session -->
<div class="form_login">
    <h1>Connexion</h1>
    <form action="functions/loginAction.php" method="post" class="login">
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="submit" value="Se connecter">
    </form>
</div>
