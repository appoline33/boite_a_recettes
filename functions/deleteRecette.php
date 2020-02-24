<?php

session_start();

// Transmettre l'id de la page profils.php à la page delete_users.php
//var_dump($_GET);

// 1. Connection à la base de données
require("database.php");
// 2. Préparer la requête (DELETE SQL)
$req = $db->prepare("DELETE FROM recettes WHERE id = :id");
$req->bindParam(":id", $_GET["recette_id"]);
// 3. Éxecuter la requête
$req->execute();
//var_dump($req);
// Rediriger vers profils.php 
header("Location: recettes.php"); 