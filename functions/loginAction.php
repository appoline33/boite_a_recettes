<?php

// Création d'une session
    // 1. Réception du pseudo et attribution à une session
session_start();
$_SESSION["pseudo"] = $_POST["pseudo"];
    // 3. Redirection vers recettes.php
header("Location: ../recettes.php");
