<?php

session_start();

// Transmettre l'id de la page profils.php à la page delete_users.php
var_dump($_GET);

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