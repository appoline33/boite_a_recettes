<?php

session_start();

// var_dump($_POST);

// Enregistrer la recette dans la base de données
    // 1. Connection à la base de données
    require("database.php");
    // 2. Préparer la requête (INSERT INTO)
    $req = $db->prepare("INSERT INTO recettes (pseudo, titre, ingredients, etapes, image) VALUES(:pseudo, :titre, :ingredients, :etapes, :image)");
    $req->bindParam(":pseudo", $_POST["pseudo"]);
    $req->bindParam(":titre", $_POST["titre"]);
    $req->bindParam(":ingredients", $_POST["ingredients"]);
    $req->bindParam(":etapes", $_POST["etapes"]);
    $req->bindParam(":image", $_POST["image"]);
    // 3. Exécuter la requête
    $req->execute();  
    // var_dump($req);
    // 4. Redirection vers recettes.php
    header("Location: ../recettes.php?");