<?php

session_start();

// Transmettre l'id de la recette à la page duplicateRecette.php
var_dump($_POST);


// 1. Connection à la base de données
//require("database.php");
// 2. Préparer la requête (UPDATE SQL)
// $req = $db->prepare("UPDATE recettes SET titre = :new_title, ingredients = :ingredients WHERE id = :recette_id");
// $req->bindParam(":new_title", $_POST["new_title"]);
// $req->bindParam(":ingredients", $_POST["ingredients"]);
// $req->bindParam(":recette_id", $_POST["recette_id"]);
// 4. Éxecuter la requête
// var_dump($req);
// $req->execute();
// 5. Rediriger vers profils.php 
//header("Location: ../profils.php"); 


// 1. Connection à la base de données
//require("database.php");
// 3. Préparer la requête (UPDATE SQL)
//$req = $db->prepare("UPDATE recettes SET id = :recette_id");
//$req->bindParam(":recette_id", $_GET["recette_id"]);
// 4. Éxecuter la requête
//var_dump($req);
//$req->execute();
// 5. Rediriger vers profils.php 
//header("Location: ../profils.php"); 



// 1. Connection à la base de données
require("database.php");
// 2. Préparer la requête (INSERT INTO)
$req = $db->prepare("INSERT INTO recettes (titre, ingredients, etapes, image) VALUES (:new_title, :ingredients, :etapes, :image)");
// $req->bindParam(":recette_id", $_POST["recette_id"]);
$req->bindParam(":new-title", $_POST["new_title"]);
$req->bindParam(":ingredients", $_POST["ingredients"]);
$req->bindParam(":etapes", $_POST["etapes"]);
$req->bindParam(":image", $_POST["image"]);
// 3. Exécuter la requête
var_dump($req);
$req->execute();  

// Redirection vers chat.php
//header("Location: ../chat.php?");



// 1. Connection à la base de données
//require("database.php");
// 2. Préparer la requête (ON DUPLICATE KEY UPDATE)
//$req = $db->prepare("INSERT INTO recettes (pseudo, titre, ingredients, etapes, image) VALUES(:pseudo, :titre, :ingredients, :etapes, :image) ON DUPLICATE KEY UPDATE pseudo = pseudo+1, titre = titre+1, ingredients = ingredients+1, etapes = etapes+1, iamge = image+1"); // pseudo = :pseudo, titre = :titre, ingredients = :ingredients, etapes = :etapes, iamge = :image WHERE id = :id
// $req = $db->prepare("INSERT INTO recettes (id) VALUES(:id+1) ON DUPLICATE KEY UPDATE id = :id+1");
//$req->bindParam(":id", $_GET["recette_id"]);
// $req->bindParam(":pseudo", $_GET["pseudo"]);
// $req->bindParam(":titre", $_GET["titre"]);
// $req->bindParam(":ingredients", $_GET["ingredients"]);
// $req->bindParam(":etapes", $_GET["etapes"]);
// $req->bindParam(":image", $_GET["image"]);
// 3. Éxecuter la requête
//$req->execute();
// var_dump($req);
// Rediriger vers profils.php 
// header("Location: recettes.php"); 